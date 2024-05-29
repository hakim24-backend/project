<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Typical;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        $dataId = Category::select('id')->get()->toArray();
        $dataSummernote = [];
        foreach ($dataId as $key => $value) {
            $dataSummernote[$key] = $value['id'];
        }
        $dataSummernote = implode(", ", $dataSummernote);
        return view('category.index', compact('category', 'dataSummernote'));
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
        $validateData = $this->validate($request, [
            'name' => 'required||string',
            'name1' => 'required||string',
            'description' => 'string'
        ], [
            'name.required' => 'Form name cannot blank',
        ]);

        $category = Category::create($validateData);
        if ($category) {
            return redirect()->route('category.index');
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
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'name1' => $request->name1,
            'description' => $request->description
        ]);
        if ($category) {
            return redirect()->route('category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index');
    }

    public function addTypical($id)
    {
        $category = Category::findOrFail($id);
        $typical = Typical::where('id_category', $category->id)->get();
        return view('category.add_typical', compact('category', 'typical'));
    }

    public function storeTypical(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $validateTypical = $this->validate($request, [
            'name' => 'required|string',
            'filename' => 'required|image'
        ]);

        $nameFile = 'typical_'.time().'.'.$request->filename->getClientOriginalExtension();
        $folderGambar = 'upload/typical';
        $request->filename->move($folderGambar, $nameFile);

        $validateTypical = Typical::create([
            'name' => $request->name,
            'filename' => $nameFile,
            'id_category' => $category->id
        ]);
        if ($validateTypical) {
            return redirect()->route('typical.addTypical', $category->id);
        }
    }

    public function updateTypical(Request $request, $id)
    {
        $typical = Typical::findOrFail($id);
        //cek image
        $filename = $request->filename;
        if ($filename == null) {

            $typical->update([
                'name' => $request->name
            ]);
            return redirect()->route('typical.addTypical', $typical->id_category);

        } else {

            $nameFile = 'typical_'.time().'.'.$request->filename->getClientOriginalExtension();
            // $namaFile = 'surat_usulan_'.time().'.'.$file->getClientOriginalExtension();
            $folderGambar = 'upload/typical';
            $request->filename->move($folderGambar, $nameFile);

            $typical->update([
                'name' => $request->name,
                'filename' => $nameFile
            ]);
            return redirect()->route('typical.addTypical', $typical->id_category);
        }
    }

    public function deleteTypical($id, $id_category)
    {
        $category=Category::findOrFail($id_category);
        $typical=Typical::findOrFail($id);
        $typical->delete();
        return redirect()->route('typical.addTypical', $category->id);
    }
}
