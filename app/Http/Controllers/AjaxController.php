<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Collection;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
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
