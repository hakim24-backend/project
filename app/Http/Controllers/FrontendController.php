<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Description;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function category($name) {
        $category = Category::where('name', $name)->first();

        if ($category == null) {
            $collection = null;
        } else {
            $collection = Collection::where('id_category', $category->id)->get();
        }
        return view('category', compact('collection'), compact('category'));
    }

    public function categoryEn($name) {
        $category = Category::where('name', $name)->first();

        if ($category == null) {
            $collection = null;
        } else {
            $collection = Collection::where('id_category', $category->id)->get();
        }
        return view('category_en', compact('collection'), compact('category'));
    }

    public function collection($id) {
        $collection = Collection::where('id', $id)->first();
        $product = Product::where('id_collection', $id)->get();
        return view('collection', compact('product'), compact('collection'));
    }

    public function collectionEn($id) {
        $collection = Collection::where('id', $id)->first();
        $product = Product::where('id_collection', $id)->get();
        return view('collection_en', compact('product'), compact('collection'));
    }

    public function product($id) {
        $product = Product::where('id', $id)->first();
        $description = Description::where('id_product', $product->id)->get();
        return view('product', compact('product'), compact('description'));
    }

    public function productEn($id) {
        $product = Product::where('id', $id)->first();
        $description = Description::where('id_product', $product->id)->get();
        return view('product_en', compact('product'), compact('description'));
    }

    public function search(Request $request)
    {
        $product = Product::where('name', 'like', '%'.$request->search.'%')->first();
        if ($product == null) {
            return view('not_found');
        } else {
            $description = Description::where('id_product', $product->id)->get();
            return view('product', compact('product'), compact('description'));
        }
    }

    public function searchEn(Request $request)
    {
        $product = Product::where('name', 'like', '%'.$request->search.'%')->first();
        if ($product == null) {
            return view('not_found_en');
        } else {
            $description = Description::where('id_product', $product->id)->get();
            return view('product', compact('product'), compact('description'));
        }
    }
}
