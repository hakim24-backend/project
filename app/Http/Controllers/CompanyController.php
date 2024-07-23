<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Route;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::all();
        return view('company.index', compact('company'));
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
        $validateSlider = $this->validate($request, [
            'tittle1' => 'required|string',
            'tittle2' => 'required|string',
            'tittle3' => 'required|string',
            'tittle4' => 'required|string',
            'tittle5' => 'required|string',
            'description1' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            'description4' => 'required|string',
            'description5' => 'required|string',
            'filename' => 'required|image'
        ]);

        $nameFile = $request->filename->getClientOriginalName();
        $folderGambar = 'upload/company';
        $request->filename->move($folderGambar, $nameFile);
        
        $validateSlider = Company::create([
            'tittle1' => $request->tittle1,
            'tittle2' => $request->tittle2,
            'tittle3' => $request->tittle3,
            'tittle4' => $request->tittle4,
            'tittle5' => $request->tittle5,
            'desc1' => $request->description1,
            'desc2' => $request->description2,
            'desc3' => $request->description3,
            'desc4' => $request->description4,
            'desc5' => $request->description5,
            'filename' => $nameFile
        ]);
        if ($validateSlider) {
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Create Data Company');
            return redirect()->route('company.index');
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
        $company = Company::findOrFail($id);

        //cek image
        $filename = $request->filename;
        if ($filename == null) {

            $company->update([
                'tittle1' => $request->tittle1,
                'tittle2' => $request->tittle2,
                'tittle3' => $request->tittle3,
                'tittle4' => $request->tittle4,
                'tittle5' => $request->tittle5,
                'desc1' => $request->description1,
                'desc2' => $request->description2,
                'desc3' => $request->description3,
                'desc4' => $request->description4,
                'desc5' => $request->description5
            ]);
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Company');
            return redirect()->route('company.index');

        } else {

            $nameFile = $request->filename->getClientOriginalName();
            $folderGambar = 'upload/company';
            $request->filename->move($folderGambar, $nameFile);

            $company->update([
                'tittle1' => $request->tittle1,
                'tittle2' => $request->tittle2,
                'tittle3' => $request->tittle3,
                'tittle4' => $request->tittle4,
                'tittle5' => $request->tittle5,
                'desc1' => $request->description1,
                'desc2' => $request->description2,
                'desc3' => $request->description3,
                'desc4' => $request->description4,
                'desc5' => $request->description5,
                'filename' => $nameFile
            ]);
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Company');
            return redirect()->route('company.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::findOrFail($id);
        $filePath = public_path('upload/company/'.$company->filename);
        unlink($filePath);
        $company->delete();
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Company');
        return redirect()->back();
    }
}
