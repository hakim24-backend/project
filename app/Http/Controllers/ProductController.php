<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Description;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        $dataId = Product::select('id')->get()->toArray();
        
        $dataSelect2 = [];
        foreach ($dataId as $key => $value) {
            $dataSelect2[$key] = $value['id'];
        }
        $dataSelect2 = implode(", ", $dataSelect2);
        return view('product.index', compact('product', 'dataSelect2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_collection' => 'required|integer',
            'filename' => 'required|image'
        ]);

        $nameFile = $request->filename->getClientOriginalName();
        $folderGambar = 'upload/product';
        $request->filename->move($folderGambar, $nameFile);

        $product = Product::create([
            'id_collection' => $request->id_collection,
            'name' => $request->name,
            'filename' => $nameFile
        ]);

        foreach ($request->inputs as $key => $value) {
            Description::create([
                'name' => $value['name'],
                'value' => $value['value'],
                'id_product' => $product->id
            ]);
        }
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Create Data Product With Collection');
        return redirect()->route('product.index');
    }

    public function storeWithCategory(Request $request)
    {
        $nameFile = $request->filename->getClientOriginalName();
        $folderGambar = 'upload/product';
        $request->filename->move($folderGambar, $nameFile);

        //cek data collection
        $cekCollection = Collection::where('id_category', $request->id_category)->first();

        //get data category
        $category = Category::where('id', $request->id_category)->first();

        if ($cekCollection == null) {
            //create collection automatically
            $collection = Collection::create([
                'id_category' => $request->id_category,
                'name' => $category->name,
                'description' => "-",
                'filename' => "-"
            ]);
            $idCollection = $collection->id;
        } else {
            $idCollection = $cekCollection->id;
        }

        $product = Product::create([
            'id_collection' => $idCollection,
            'name' => $request->name,
            'filename' => $nameFile
        ]);

        foreach ($request->inputs as $key => $value) {
            Description::create([
                'name' => $value['name'],
                'value' => $value['value'],
                'id_product' => $product->id
            ]);
        }
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Create Data Product With Category');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=Product::findOrFail($id);
        $description=Description::where('id_product', $product->id)->get();
        return view('product.edit_description', compact('product', 'description'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        //cek image
        $filename = $request->filename;
        if ($filename == null) {

            $product->update([
                'id_collection' => $request->id_collection_update,
                'name' => $request->name
            ]);
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Product');
            return redirect()->route('product.index');

        } else {

            $nameFile = $request->filename->getClientOriginalName();
            $folderGambar = 'upload/product';
            $request->filename->move($folderGambar, $nameFile);

            $product->update([
                'id_collection' => $request->id_collection_update,
                'name' => $request->name,
                'filename' => $nameFile
            ]);
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Product');
            return redirect()->route('product.index');

        }
    }

    function storeDetail(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'detail_filename' => 'required|image'
        ]);
        $nameFile = $request->detail_filename->getClientOriginalName();
        $folderGambar = 'upload/detail_product';
        $request->detail_filename->move($folderGambar, $nameFile);

        $product->update([
            'detail_filename' => $nameFile
        ]);
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Create Data Detail Product');
        return redirect()->route('product.index');
    }

    public function storeDescription(Request $request, $id)
    {
        //delete old description
        $description=Description::where('id_product', $id)->get();
        foreach ($description as $key => $value) {
            $value->delete();
        }

        //input new description
        foreach ($request->inputs as $k => $v) {
            Description::create([
                'name' => $v['name'],
                'value' => $v['value'],
                'id_product' => $id
            ]);
        }
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Create Data Description Product');
        return redirect()->route('product.index');
    }

    public function deleteImageView($id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'detail_filename' => null
        ]);
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Image Viewer Product');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Product');
        return redirect()->route('product.index');
    }

    function storeFile(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'filename1' => 'required|mimes:pdf'
        ]);
        $nameFile = $request->filename1->getClientOriginalName();
        $folderGambar = 'upload/product_file';
        $request->filename1->move($folderGambar, $nameFile);

        $product->update([
            'filename1' => $nameFile
        ]);
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Create Data File Product');
        return redirect()->route('product.index');
    }

    public function deleteFile($id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'filename1' => null
        ]);
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data File Product');
        return redirect()->route('product.index');
    }

    public function deleteDetailImage($id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'detail_filename' => null
        ]);
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Image Viewer Product');
        return redirect()->route('product.index');
    }
}
