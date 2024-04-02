<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Collection::all();
        return view('collection.index', compact('collection'));
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
        $validateCollection = $this->validate($request, [
            'id_category' => 'required|integer',
            'name' => 'required|string',
            'filename' => 'required|image|max:2048'
        ]);
        
        $nameFile = $request->filename->getClientOriginalName();
        $folderGambar = 'upload/collection';
        $request->filename->move($folderGambar, $nameFile);

        $validateCollection = Collection::create([
            'id_category' => $request->id_category,
            'name' => $request->name,
            'filename' => $nameFile
        ]);
        if ($validateCollection) {
            return redirect()->route('collection.index');
        }
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