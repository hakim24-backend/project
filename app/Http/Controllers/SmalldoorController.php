<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smalldoor;
use App\Models\Product;

class SmalldoorController extends Controller
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
        $validateSmalldoor = $this->validate($request, [
            'name' => 'required|string',
            'filename' => 'required|image'
        ]);

        $nameFile = 'smalldoor_'.time().'.'.$request->filename->getClientOriginalExtension();
        $folderGambar = 'upload/small_door';
        $request->filename->move($folderGambar, $nameFile);

        $validateSmalldoor = Smalldoor::create([
            'name' => $request->name,
            'filename' => $nameFile,
            'id_product' => $product->id
        ]);
        if ($validateSmalldoor) {
            return redirect()->route('smalldoor.show', $product->id);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $smalldoor = Smalldoor::where('id_product', $id)->get();
        $product = Product::findOrFail($id);
        return view('product.index_smalldoor', compact('smalldoor', 'product'));
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
        $smalldoor = Smalldoor::findOrFail($id);
        //cek image
        $filename = $request->filename;
        if ($filename == null) {

            $smalldoor->update([
                'name' => $request->name
            ]);
            return redirect()->route('smalldoor.show', $smalldoor->id_product);

        } else {

            $nameFile = 'smalldoor'.time().'.'.$request->filename->getClientOriginalExtension();
            // $namaFile = 'surat_usulan_'.time().'.'.$file->getClientOriginalExtension();
            $folderGambar = 'upload/small_door';
            $request->filename->move($folderGambar, $nameFile);

            $smalldoor->update([
                'name' => $request->name,
                'filename' => $nameFile
            ]);
            return redirect()->route('smalldoor.show', $smalldoor->id_product);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $smalldoor = Smalldoor::findOrFail($id);
        $filePath = public_path('upload/small_door/'.$smalldoor->filename);
        unlink($filePath);
        $smalldoor->delete();
        return redirect()->back();
    }
}
