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
        return view('product.index', compact('product'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
