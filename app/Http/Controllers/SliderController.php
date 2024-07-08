<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::all();
        $cekSlider = Slider::count();

        $dataId = Slider::select('id')->get()->toArray();
        // dd($dataId);
        
        $dataSelect2 = [];
        foreach ($dataId as $key => $value) {
            $dataSelect2[$key] = $value['id'];
        }
        $dataSelect2 = implode(", ", $dataSelect2);

        //cek database for name css
        if ($cekSlider == 0) {
            $lenght = 1;
        } else {
            $lenght = $cekSlider+1;
        }

        $name_css = 'slide'.$lenght;
        return view('slider.index', compact('slider', 'name_css', 'dataSelect2'));
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
            'name' => 'required|string',
            'description' => 'required|string',
            'id_category' => 'required|integer',
            'filename' => 'required|image'
        ]);

        $nameFile = $request->filename->getClientOriginalName();
        $folderGambar = 'upload/slider';
        $request->filename->move($folderGambar, $nameFile);

        //cek status
        $cekSlider = Slider::count();
        if ($cekSlider == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        
        $validateSlider = Slider::create([
            'name' => $request->name,
            'name_css' => $request->name_css_hidden,
            'id_category' => $request->id_category,
            'description' => $request->description,
            'status' => $status,
            'filename' => $nameFile
        ]);
        if ($validateSlider) {
            return redirect()->route('slider.index');
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
        $slider = Slider::findOrFail($id);

        //cek image
        $filename = $request->filename;
        if ($filename == null) {

            $slider->update([
                'name' => $request->name,
                'id_category' => $request->id_category_update,
                'description' => $request->description
            ]);
            return redirect()->route('slider.index');

        } else {

            $nameFile = $request->filename->getClientOriginalName();
            $folderGambar = 'upload/slider';
            $request->filename->move($folderGambar, $nameFile);

            $slider->update([
                'name' => $request->name,
                'id_category' => $request->id_category_update,
                'description' => $request->description,
                'filename' => $nameFile
            ]);
            return redirect()->route('slider.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        $filePath = public_path('upload/slider/'.$slider->filename);
        unlink($filePath);
        $slider->delete();
        return redirect()->back();
    }
}
