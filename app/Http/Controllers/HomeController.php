<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Collection;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalProduct = Product::count();
        $totalCategory = Category::count();
        $totalCollection = Collection::count();
        $totalUser = User::count();
        return view('home', [
            'product' => $totalProduct,
            'category' => $totalCategory,
            'collection' => $totalCollection,
            'user' => $totalUser
        ]);
    }

    public function log()
    {
        $log = DB::table('activity_log')
        ->get();
        return view('log', [
            'log' => $log
        ]);
    }
}
