<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Careertwo;
use App\Models\DetailCareertwo;
use App\Models\Resumetwo;
use Illuminate\Support\Facades\Route;

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
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Create Data Career V2');
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
        $careertwo = Careertwo::findOrFail($id);

        //cek image
        $filename = $request->filename;
        if ($filename == null) {

            $careertwo->update([
                'name_company' => $request->name_company,
                'info_company' => $request->info_company
            ]);
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Career V2');
            return redirect()->route('careertwo.index');

        } else {

            $nameFile = $request->filename->getClientOriginalName();
            $folderGambar = 'upload/careertwo';
            $request->filename->move($folderGambar, $nameFile);

            $careertwo->update([
                'name_company' => $request->name_company,
                'info_company' => $request->info_company,
                'filename' => $nameFile
            ]);
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Edit Data Career V2');
            return redirect()->route('careertwo.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $careertwo = Careertwo::findOrFail($id);
        $filePath = public_path('upload/careertwo/'.$careertwo->filename);
        unlink($filePath);
        $careertwo->delete();
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Career V2');
        return redirect()->route('careertwo.index');
    }

    public function indexJob($id)
    {
        $careertwo = Careertwo::findOrFail($id);
        $job = DetailCareertwo::where('id_careertwo', $id)->get();
        return view('careertwo.index_job', compact('job', 'careertwo'));
    }

    public function storeJob(Request $request, $id)
    {
        // dd($request);
        $validateCareertwo = $this->validate($request, [
            'job' => 'required|string',
            'salary' => 'required|integer',
            'schedule' => 'required|string',
            'day_of' => 'required|string',
            'location' => 'required|string',
            'requirment' => 'required|string',
            'desc_location' => 'required|string',
            'name_contact' => 'required|string',
            'phone_contact' => 'required|string',
            'email_contact' => 'required|string',
            'website_contact' => 'required|string'
        ]);

        $validateCareertwo = DetailCareertwo::create([
            'job' => $request->job,
            'salary' => $request->salary,
            'schedule' => $request->schedule,
            'day_of' => $request->day_of,
            'location' => $request->location,
            'requirment' => $request->requirment,
            'desc_location' => $request->desc_location,
            'name_contact' => $request->name_contact,
            'phone_contact' => $request->phone_contact,
            'email_contact' => $request->email_contact,
            'website_contact' => $request->website_contact,
            'id_careertwo' => $id
        ]);
        if ($validateCareertwo) {
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Create Data Job Career V2');
            return redirect()->route('job.index', $id);
        }
    }

    public function updateJob(Request $request, $id)
    {
        $detailCareertwo = DetailCareertwo::findOrFail($id);
        $detailCareertwo->update([
            'job' => $request->job,
            'salary' => $request->salary,
            'schedule' => $request->schedule,
            'day_of' => $request->day_of,
            'location' => $request->location,
            'requirment' => $request->requirment,
            'desc_location' => $request->desc_location,
            'name_contact' => $request->name_contact,
            'phone_contact' => $request->phone_contact,
            'email_contact' => $request->email_contact,
            'website_contact' => $request->website_contact
        ]);
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Edit Data Job Career V2');
        return redirect()->route('job.index', $detailCareertwo->id_careertwo);
    }

    public function deleteJob($id, $id_careertwo){
        $detailCareertwo = DetailCareertwo::findOrFail($id);
        $detailCareertwo->delete();
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Job Career V2');
        return redirect()->route('job.index', $id_careertwo);
    }

    public function resume($id)
    {
        $resume = Resumetwo::select(
            'resumetwos.id as id', 'resumetwos.filename as filename', 'resumetwos.id_detail_careertwo as id_detail_careertw0',
            'resumetwos.created_at as created_at', 'detail_careertwos.job as job', 'detail_careertwos.salary as salary', 'detail_careertwos.schedule as schedule',
            'detail_careertwos.day_of as day_of', 'detail_careertwos.location as location', 'detail_careertwos.requirment as requirment', 
            'detail_careertwos.name_contact as name_contact', 'detail_careertwos.phone_contact as phone_contact', 'detail_careertwos.phone_contact as email_contact',
            'detail_careertwos.website_contact as website_contact', 'detail_careertwos.id_careertwo as id_careertwo'
            )
        ->join('detail_careertwos', 'detail_careertwos.id', '=', 'resumetwos.id_detail_careertwo')
        ->where('id_careertwo', $id)
        ->get();
        $careertwo = Careertwo::findOrFail($id);
        return view('careertwo.resume', [
            'resume' => $resume,
            'careertwo' => $careertwo
        ]);
    }

    public function deleteResume($id, $id_careertwo)
    {
        $resume = Resumetwo::findOrFail($id);
        $filePath = public_path('upload/resumev2/'.$resume->filename);
        unlink($filePath);
        $resume->delete();
        activity()
        ->event(Route::getCurrentRoute()->getActionMethod())
        ->log('Delete Data Resume Career V2');
        return redirect()->route('job.resume', $id_careertwo);
    }
}
