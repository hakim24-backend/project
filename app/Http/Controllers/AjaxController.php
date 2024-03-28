<?php

namespace App\Http\Controllers;
use App\Models\Category;

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
}
