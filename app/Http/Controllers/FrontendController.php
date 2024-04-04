<?php

namespace App\Http\Controllers;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Description;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function category() {
        $collection = Collection::all();
        return view('category', compact('collection'));
    }

    public function collection($id) {
        $product = Product::where('id_collection', $id)->get();
        return view('collection', compact('product'));
    }

    public function product($id) {
        $product = Product::where('id', $id)->first();
        $description = Description::where('id_product', $product->id)->get();
        return view('product', compact('product'), compact('description'));
    }
}
