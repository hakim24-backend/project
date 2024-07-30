<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Productoption;
use Illuminate\Support\Facades\Route;

class ProductoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $product = Product::findOrFail($request->id_product);
        $validateOption = $this->validate($request, [
            'note' => 'required|string',
            'filename' => 'required|image'
        ]);

        $nameFile = 'product_option_'.time().'.'.$request->filename->getClientOriginalExtension();
        $folderGambar = 'upload/product_option';
        $request->filename->move($folderGambar, $nameFile);

        $validateOption = Productoption::create([
            'note' => $request->note,
            'filename' => $nameFile,
            'id_product' => $product->id
        ]);
        if ($validateOption) {
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Create Data Product Option');
            return redirect()->route('productoption.show', $product->id);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productoption = Productoption::where('id_product', $id)->get();
        $product = Product::findOrFail($id);
        return view('product.index_option', compact('productoption', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $productoption = Productoption::findOrFail($id);
        //cek image
        $filename = $request->filename;
        if ($filename == null) {

            $productoption->update([
                'note' => $request->note
            ]);
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Product Option');
            return redirect()->route('productoption.show', $productoption->id_product);

        } else {

            $nameFile = 'product_option_'.time().'.'.$request->filename->getClientOriginalExtension();
            // $namaFile = 'surat_usulan_'.time().'.'.$file->getClientOriginalExtension();
            $folderGambar = 'upload/product_option';
            $request->filename->move($folderGambar, $nameFile);

            $productoption->update([
                'note' => $request->note,
                'filename' => $nameFile
            ]);
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Product Option');
            return redirect()->route('productoption.show', $productoption->id_product);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productoption = Productoption::findOrFail($id);
        $filePath = public_path('upload/product_option/'.$productoption->filename);
        unlink($filePath);
        $productoption->delete();
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Product Option');
        return redirect()->back();
    }
}
