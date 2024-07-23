<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\TypicalCollection;
use Illuminate\Support\Facades\Route;

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

        $dataId = Collection::select('id')->get()->toArray();
        $dataSummernote = [];
        foreach ($dataId as $key => $value) {
            $dataSummernote[$key] = $value['id'];
        }
        $dataSummernote = implode(", ", $dataSummernote);

        return view('collection.index', compact('collection', 'dataSelect2', 'dataSummernote'));
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
            'filename' => 'required|image'
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
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Create Data Collection');
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
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Collection');
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
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Collection');
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
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Collection');
        return redirect()->route('collection.index');
    }

    public function addTypical($id)
    {
        $collection = Collection::findOrFail($id);
        $typical = TypicalCollection::where('id_collection', $collection->id)->get();
        return view('collection.add_typical', compact('collection', 'typical'));
    }

    public function storeTypical(Request $request, $id)
    {
        $collection = Collection::findOrFail($id);
        $validateTypical = $this->validate($request, [
            'name' => 'required|string',
            'filename' => 'required|image'
        ]);

        $nameFile = 'typical_collection'.time().'.'.$request->filename->getClientOriginalExtension();
        $folderGambar = 'upload/typical_collection';
        $request->filename->move($folderGambar, $nameFile);

        $validateTypical = TypicalCollection::create([
            'name' => $request->name,
            'filename' => $nameFile,
            'id_collection' => $collection->id
        ]);
        if ($validateTypical) {
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Create Data Typical Collection');
            return redirect()->route('typicalCollection.addTypical', $collection->id);
        }
    }

    public function updateTypical(Request $request, $id)
    {
        $typical = TypicalCollection::findOrFail($id);
        //cek image
        $filename = $request->filename;
        if ($filename == null) {

            $typical->update([
                'name' => $request->name
            ]);
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Typical Collection');
            return redirect()->route('typicalCollection.addTypical', $typical->id_collection);

        } else {

            $nameFile = 'typical_collection'.time().'.'.$request->filename->getClientOriginalExtension();
            // $namaFile = 'surat_usulan_'.time().'.'.$file->getClientOriginalExtension();
            $folderGambar = 'upload/typical_collection';
            $request->filename->move($folderGambar, $nameFile);

            $typical->update([
                'name' => $request->name,
                'filename' => $nameFile
            ]);
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Typical Collection');
            return redirect()->route('typicalCollection.addTypical', $typical->id_collection);
        }
    }

    public function deleteTypical($id, $id_collection)
    {
        $collection=Collection::findOrFail($id_collection);
        $typical=TypicalCollection::findOrFail($id);
        $typical->delete();
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Typical Collection');
        return redirect()->route('typicalCollection.addTypical', $collection->id);
    }
}
