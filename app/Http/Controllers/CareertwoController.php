<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Careertwo;
use App\Models\DetailCareertwo;

class CareertwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careertwo = Careertwo::all();
        return view('careertwo.index', compact('careertwo'));
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
        $validateCareer = $this->validate($request, [
            'name_company' => 'required|string',
            'info_company' => 'required|string',
            'filename' => 'required|image'
        ]);
        
        $nameFile = 'company_image_'.time().'.'.$request->filename->getClientOriginalExtension();
        $folderGambar = 'upload/careertwo';
        $request->filename->move($folderGambar, $nameFile);

        $validateCareer = Careertwo::create([
            'name_company' => $request->name_company,
            'info_company' => $request->info_company,
            'filename' => $nameFile
        ]);
        if ($validateCareer) {
            return redirect()->route('careertwo.index');
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
