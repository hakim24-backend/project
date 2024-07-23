<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Digital;
use Illuminate\Support\Facades\Route;

class DigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $digital = Digital::all();
        return view('digital.index', compact('digital'));
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
        $validateDigital = $this->validate($request, [
            'name' => 'required|string',
            'category_file' => 'required|string',
            'filename_img' => 'required|image',
            'filename' => 'required|file'
        ]);

        //save image
        $nameFile = $request->filename_img->getClientOriginalName();
        $folderGambar = 'upload/digital_library/img';
        $request->filename_img->move($folderGambar, $nameFile);

        //save document
        $nameFile1 = $request->filename->getClientOriginalName();
        $folderGambar1 = 'upload/digital_library/document';
        $request->filename->move($folderGambar1, $nameFile1);

        $validateDigital = Digital::create([
            'name' => $request->name,
            'category_file' => $request->category_file,
            'filename_img' => $nameFile,
            'filename' => $nameFile1,
        ]);
        if ($validateDigital) {
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Create Data Digital Library');
            return redirect()->route('digitals.index');
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
        $digital = Digital::findOrFail($id);
        if ($request->filename_img == null && $request->filename == null) {
            $digital->update([
                'name' => $request->name,
                'category_file' => $request->category_file,
            ]);activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Digital Library');
            return redirect()->route('digitals.index');
        } else {
            if ($request->filename_img != null) {
                //save image
                $nameFile = $request->filename_img->getClientOriginalName();
                $folderGambar = 'upload/digital_library/img';
                $request->filename_img->move($folderGambar, $nameFile);

                $digital->update([
                    'name' => $request->name,
                    'category_file' => $request->category_file,
                    'filename_img' => $nameFile
                ]);
            } elseif ($request->filename != null) {
                //save document
                $nameFile1 = $request->filename->getClientOriginalName();
                $folderGambar1 = 'upload/digital_library/document';
                $request->filename->move($folderGambar1, $nameFile1);

                $digital->update([
                    'name' => $request->name,
                    'category_file' => $request->category_file,
                    'filename' => $nameFile1
                ]);
            } else {
                //save image
                $nameFile = $request->filename_img->getClientOriginalName();
                $folderGambar = 'upload/digital_library/img';
                $request->filename_img->move($folderGambar, $nameFile);

                //save document
                $nameFile1 = $request->filename->getClientOriginalName();
                $folderGambar1 = 'upload/digital_library/document';
                $request->filename->move($folderGambar1, $nameFile1);

                $digital->update([
                    'name' => $request->name,
                    'category_file' => $request->category_file,
                    'filename_img' => $nameFile,
                    'filename' => $nameFile1
                ]);
            }
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Digital Library');
            return redirect()->route('digitals.index');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $digital = Digital::findOrFail($id);

        // delete file img
        $filePath = public_path('upload/digital_library/img/'.$digital->filename_img);
        unlink($filePath);

        // delete file document
        $filePath1 = public_path('upload/digital_library/document/'.$digital->filename);
        unlink($filePath1);

        $digital->delete();
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Digital Library');
        return redirect()->route('digitals.index');
    }
}
