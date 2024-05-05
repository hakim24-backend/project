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
        $dataId = Collection::select('id')->get()->toArray();
        // dd($dataId);
        
        $dataSelect2 = [];
        foreach ($dataId as $key => $value) {
            $dataSelect2[$key] = $value['id'];
        }
        $dataSelect2 = implode(", ", $dataSelect2);

        return view('collection.index', compact('collection', 'dataSelect2'));
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

        ///cek description
        if ($request->description == null) {
            $description = "-";
        } else {
            $description = $request->description;
        }

        $validateCollection = Collection::create([
            'id_category' => $request->id_category,
            'name' => $request->name,
            'description' => $description,
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
        $collection = Collection::findOrFail($id);

        //cek image
        $filename = $request->filename;

        // dd($request->description);
        //cek description
        if ($request->description !== $collection->description) {
            if ($request->description == null) {
                $description = "-";
            } else {
                $description = $request->description;
            }
        } else {
            $description = $collection->description;
        }
        if ($filename == null) {

            $collection->update([
                'id_category' => $request->id_category_update,
                'name' => $request->name,
                'description' => $description
            ]);
            return redirect()->route('collection.index');

        } else {

            $nameFile = $request->filename->getClientOriginalName();
            $folderGambar = 'upload/collection';
            $request->filename->move($folderGambar, $nameFile);

            $collection->update([
                'id_category' => $request->id_category_update,
                'name' => $request->name,
                'description' => $description,
                'filename' => $nameFile
            ]);
            return redirect()->route('collection.index');

        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $collection = Collection::findOrFail($id);
        $collection->delete();
        return redirect()->route('collection.index');
    }
}
