<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Description;
use App\Models\Resume;

use Illuminate\Http\Request;

class AjaxFrontendController extends Controller
{
    public function selectSeries(Request $request)
    {
        $request->has('q');
        $search = $request->q;
        $series = Description::select('descriptions.value as name')
        ->join('products', 'products.id', '=', 'descriptions.id_product')
        ->where('descriptions.name', 'Серия')
        ->where('descriptions.name', 'LIKE', "%$search%")
        ->groupBy('descriptions.value')
        ->get();
        foreach ($series as $key => $value) {
            $series[$key]['id'] = $value->id;
            $series[$key]['name'] = $value->name;
        }
        return response()->json($series);
    }

    public function selectTexture(Request $request)
    {
        $request->has('q');
        $search = $request->q;
        $texture = Description::select('descriptions.value as name')
        ->join('products', 'products.id', '=', 'descriptions.id_product')
        ->where('descriptions.name', 'Тексеура')
        ->where('descriptions.name', 'LIKE', "%$search%")
        ->groupBy('descriptions.value')
        ->get();
        foreach ($texture as $key => $value) {
            $texture[$key]['id'] = $value->id;
            $texture[$key]['name'] = $value->name;
        }
        return response()->json($texture);
    }

    public function selectCategory(Request $request)
    {
        $request->has('q');
        $search = $request->q;
        $category = Category::select('id', 'name')
                ->where('name', 'LIKE', "%$search%")
                ->get();
        foreach ($category as $key => $value) {
            $category[$key]['id'] = $value->id;
            $category[$key]['name'] = $value->name;
        }
        return response()->json($category);
    }

    public function selectCollection(Request $request)
    {
        $request->has('q');
        $search = $request->q;
        $collection = Collection::select('id', 'name')
                ->where('name', 'LIKE', "%$search%")
                ->get();
        foreach ($collection as $key => $value) {
            $collection[$key]['id'] = $value->id;
            $collection[$key]['name'] = $value->name;
        }
        return response()->json($collection);
    }

    public function selectName(Request $request)
    {
        $request->has('q');
        $search = $request->q;
        $nameProduct = Product::select('id', 'name')
                ->where('name', 'LIKE', "%$search%")
                ->get();
        foreach ($nameProduct as $key => $value) {
            $nameProduct[$key]['id'] = $value->id;
            $nameProduct[$key]['name'] = $value->name;
        }
        return response()->json($nameProduct);
    }

    function storeResume(Request $request)
    {   
        $countFile = Resume::where('id_career', $request->id_career)->count();
        $numberFile = $countFile+1;
        $nameFile = $numberFile.'_resume_'.time().'.'.$request->cv->getClientOriginalExtension();
        $folderGambar = 'upload/resume';
        $request->cv->move($folderGambar, $nameFile);

        $resume = Resume::create([
            'id_career' => $request->id_career,
            'filename' => $nameFile
        ]);

        return response()->json(['success' => true]);

    }
}
