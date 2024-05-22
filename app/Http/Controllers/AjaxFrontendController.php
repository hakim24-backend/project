<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Description;

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
}
