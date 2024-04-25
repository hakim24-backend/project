<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Description;

use Illuminate\Http\Request;

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

        return redirect()->route('product.index');
    }

    public function deleteImageView($id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'detail_filename' => null
        ]);
        
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
