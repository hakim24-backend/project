<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Models\Career;
use App\Models\CareerDetail;
use App\Models\Resume;

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
    
    public function addDetail($id)
    {
        $career = Career::findOrFail($id);
        return view('career.add_detail', compact('career'));
    }

    public function storeDetail(Request $request, $id)
    {
        $career = Career::findOrFail($id);
        $validateCareerDetail = $this->validate($request, [
            'desc_job' => 'required|string',
            'desc_location' => 'required|string',
            'name_contact' => 'required|string',
            'phone_contact' => 'required|string',
            'email_contact' => 'required|string',
            'website_contact' => 'required|string'
        ]);

        $validateCareerDetail = CareerDetail::create([
            'desc_job' => $request->desc_job,
            'desc_location' => $request->desc_location,
            'name_contact' => $request->name_contact,
            'phone_contact' => $request->phone_contact,
            'email_contact' => $request->email_contact,
            'website_contact' => $request->website_contact,
            'id_career' => $career->id
        ]);
        if ($validateCareerDetail) {
            return redirect()->route('careerier.index');
        }
    }

    function editDetail($id)
    {
        $careerDetail = CareerDetail::findOrFail($id);
        return view('career.edit_detail', compact('careerDetail'));
    }

    public function updateDetail(Request $request, $id)
    {
        $careerDetail = CareerDetail::findOrFail($id);
        $careerDetail->update([
            'desc_job' => $request->desc_job,
            'desc_location' => $request->desc_location,
            'name_contact' => $request->name_contact,
            'phone_contact' => $request->phone_contact,
            'email_contact' => $request->email_contact,
            'website_contact' => $request->website_contact
        ]);
        if ($careerDetail) {
            return redirect()->route('careerier.index');
        }
    }

    function resumeCareer($id)
    {
        $resume = Resume::where('id_career', $id)->get();
        $career = Career::findOrFail($id);
        return view('career.resume', [
            'resume' => $resume,
            'career' => $career
        ]);
    }

    function deleteResume($id, $id_career)
    {
        $resume = Resume::findOrFail($id);
        $filePath = public_path('upload/resume/'.$resume->filename);
        unlink($filePath);
        $resume->delete();
        return redirect()->route('career.resume', $id_career);
    }
}
