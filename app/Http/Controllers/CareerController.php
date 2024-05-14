<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $career = Career::all();
        return view('career.index', compact('career'));
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
            'job' => 'required|string',
            'office' => 'required|string',
            'type' => 'required|string',
            'location' => 'required|string',
            'salary' => 'required|integer',
            'experience' => 'required|integer',
            'filename' => 'required|image'
        ]);
        
        $nameFile = $request->filename->getClientOriginalName();
        $folderGambar = 'upload/career';
        $request->filename->move($folderGambar, $nameFile);

        $validateCareer = Career::create([
            'job' => $request->job,
            'office' => $request->office,
            'type' => $request->type,
            'location' => $request->location,
            'salary' => $request->salary,
            'experience' => $request->experience,
            'date' => date('Y-m-d'),
            'filename' => $nameFile
        ]);
        if ($validateCareer) {
            return redirect()->route('careerier.index');
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
        $career = Career::findOrFail($id);

        //cek image
        $filename = $request->filename;
        if ($filename == null) {

            $career->update([
                'job' => $request->job,
                'office' => $request->office,
                'type' => $request->type,
                'location' => $request->location,
                'salary' => $request->salary,
                'experience' => $request->experience,
                'date' => date('Y-m-d'),
            ]);
            return redirect()->route('careerier.index');

        } else {

            $nameFile = $request->filename->getClientOriginalName();
            $folderGambar = 'upload/career';
            $request->filename->move($folderGambar, $nameFile);

            $career->update([
                'job' => $request->job,
                'office' => $request->office,
                'type' => $request->type,
                'location' => $request->location,
                'salary' => $request->salary,
                'experience' => $request->experience,
                'date' => date('Y-m-d'),
                'filename' => $nameFile
            ]);
            return redirect()->route('careerier.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $career = Career::findOrFail($id);
        $career->delete();
        return redirect()->route('careerier.index');
    }
}
