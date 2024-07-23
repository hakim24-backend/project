<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Mode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    public function manageMaintenance(Request $request)
    {
        $mode = Mode::where('name', 'maintenance')->first();
        if ($request->maintenance == 1) {
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Maintenance Mode ON');
        } else {
            activity()
            ->event(Route::getCurrentRoute()->getActionMethod())
            ->log('Maintenance Mode OFF');
        }
        $mode->update([
            'value' => intval($request->maintenance)
        ]);
        return redirect()->back(); 
    }
}
