<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Description;

use \Statickidz\GoogleTranslate;
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

        if ($name == 'Межкомнатные двери') {
            $product = Product::select('products.*')
            ->join('collections', 'collections.id', '=', 'products.id_collection')
            ->join('categories', 'categories.id', '=', 'collections.id_category')
            ->where('categories.name', 'Межкомнатные двери')
            ->get();
            return view('category_door', compact('product', 'category'));
        } else {
            return view('category', compact('collection'), compact('category'));
        }
    }

    public function categoryEn($name) {
        $category = Category::where('name', $name)->first();

        if ($category == null) {
            $collection = null;
        } else {
            $collection = Collection::where('id_category', $category->id)->get();
        }

        if ($name == 'Межкомнатные двери') {
            $product = Product::select('products.*')
            ->join('collections', 'collections.id', '=', 'products.id_collection')
            ->join('categories', 'categories.id', '=', 'collections.id_category')
            ->where('categories.name', 'Межкомнатные двери')
            ->get();
            return view('category_door_en', compact('product', 'category'));
        } else {
            return view('category_en', compact('collection'), compact('category'));
        }
    }

    public function collection($id) {
        $collection = Collection::where('id', $id)->first();
        $product = Product::where('id_collection', $id)->get();
        if ($collection->category->name == 'Столешницы') {
            //get series
            $description = Description::select('descriptions.value as series')
            ->join('products', 'products.id', '=', 'descriptions.id_product')
            ->where('products.id_collection', $id)
            ->where('descriptions.name', 'Серия')
            ->groupBy('descriptions.value')
            ->get();
        } elseif($collection->category->name == 'ЛДСП') {
            //get texture
            $description = Description::select('descriptions.value as texture')
            ->join('products', 'products.id', '=', 'descriptions.id_product')
            ->where('products.id_collection', $id)
            ->where('descriptions.name', 'Тексеура')
            ->groupBy('descriptions.value')
            ->get();
        } else {
            $description = array();
        }
        
        return view('collection', [
            'collection' => $collection,
            'product' => $product,
            'description' => $description
        ]);
    }

    public function collectionEn($id) {
        $collection = Collection::where('id', $id)->first();
        $product = Product::where('id_collection', $id)->get();

        if ($collection->category->name == 'Столешницы') {
            //get series
            $description = Description::select('descriptions.value as series')
            ->join('products', 'products.id', '=', 'descriptions.id_product')
            ->where('products.id_collection', $id)
            ->where('descriptions.name', 'Серия')
            ->groupBy('descriptions.value')
            ->groupBy('descriptions.value')
            ->get();
        } elseif($collection->category->name == 'ЛДСП') {
            //get texture
            $description = Description::select('descriptions.value as texture')
            ->join('products', 'products.id', '=', 'descriptions.id_product')
            ->where('products.id_collection', $id)
            ->where('descriptions.name', 'Тексеура')
            ->groupBy('descriptions.value')
            ->get();
        } else {
            $description = array();
        }
        return view('collection_en', [
            'collection' => $collection,
            'product' => $product,
            'description' => $description
        ]);
    }

    public function product($id) {
        $product = Product::where('id', $id)->first();
        $description = Description::where('id_product', $product->id)->get();
        $getValue = Description::where('id_product', $product->id)->count();
        // dd($product->collection->category->name);
        if ($product->collection->category->name == 'МЕЖКОМНАТНЫЕ ДВЕРИ') {
            return view('product_door', compact('product', 'description'));
        } else {
            //get name by lenght
            $checkName = substr_count($product->name, ' ');
            if ($checkName == 1 && $getValue <= 4) {
                $imageView = 1;
            } elseif ($checkName == 2 && $getValue <= 3) {
                $imageView = 1;
            } elseif ($checkName >= 3 && $getValue <= 2) {
                $imageView = 1;
            } else {
                $imageView = 0;
            }
            
            return view('product', compact('product', 'description', 'checkName', 'imageView'));
        }
    }

    public function productEn($id) {
        $product = Product::where('id', $id)->first();
        $description = Description::where('id_product', $product->id)->get();
        $getValue = Description::where('id_product', $product->id)->count();
        if ($product->collection->category->name == 'МЕЖКОМНАТНЫЕ ДВЕРИ') {
            return view('product_door_en', compact('product', 'description'));
        } else {
            //get name by lenght
            $checkName = substr_count($product->name, ' ');
            if ($checkName == 1 && $getValue <= 4) {
                $imageView = 1;
            } elseif ($checkName == 2 && $getValue <= 3) {
                $imageView = 1;
            } elseif ($checkName >= 3 && $getValue <= 2) {
                $imageView = 1;
            } else {
                $imageView = 0;
            }

            return view('product_en', compact('product', 'description', 'checkName', 'imageView'));
        }
    }

    public function search(Request $request)
    {
        $product = Product::where('name', 'like', '%'.$request->search.'%')->first();
        if ($product == null) {
            return view('not_found');
        } else {
            $description = Description::where('id_product', $product->id)->get();
            $getValue = Description::where('id_product', $product->id)->count();

            //get name by lenght
            $checkName = substr_count($product->name, ' ');
            if ($checkName == 1 && $getValue <= 4) {
                $imageView = 1;
            } elseif ($checkName == 2 && $getValue <= 3) {
                $imageView = 1;
            } elseif ($checkName >= 3 && $getValue <= 2) {
                $imageView = 1;
            } else {
                $imageView = 0;
            }

            return view('product', compact('product', 'description', 'checkName', 'imageView'));
        }
    }

    public function searchEn(Request $request)
    {
        //cek product for category
        $cekCategory = Product::where('name', 'like', '%'.$request->search.'%')->first();
        if ($cekCategory == null) {
            $source = 'en';
            $target = 'ru';
            $text = $request->search;
            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
            $product = Product::where('name', 'like', '%'.$result.'%')->first();
        } else {
            $product = $cekCategory;
        }
        
        if ($product == null) {
            return view('not_found_en');
        } else {
            $description = Description::where('id_product', $product->id)->get();
            $getValue = Description::where('id_product', $product->id)->count();

            //get name by lenght
            $checkName = substr_count($product->name, ' ');
            if ($checkName == 1 && $getValue <= 4) {
                $imageView = 1;
            } elseif ($checkName == 2 && $getValue <= 3) {
                $imageView = 1;
            } elseif ($checkName >= 3 && $getValue <= 2) {
                $imageView = 1;
            } else {
                $imageView = 0;
            }
            return view('product_en', compact('product', 'description', 'checkName', 'imageView'));
        }
    }

    public function filter(Request $request, $id)
    {
        $collection = Collection::where('id', $id)->first();

        if ($collection->category->name == 'Столешницы') {
            //cek filter
            if ($request->series == null) {
                return redirect()->route('frontend.collection', $id);
            }
            $product = Product::select('products.*')
                ->join('descriptions', 'products.id', '=', 'descriptions.id_product')
                ->where('products.id_collection', $id)
                ->whereIn('descriptions.value', $request->series)
                ->get();
            //get series
            $description = Description::select('descriptions.value as series')
                        ->join('products', 'products.id', '=', 'descriptions.id_product')
                        ->where('products.id_collection', $id)
                        ->where('descriptions.name', 'Серия')
                        ->groupBy('descriptions.value')
                        ->get();
        } elseif($collection->category->name == 'ЛДСП') {
            //cek filter
            if ($request->texture == null) {
                return redirect()->route('frontend.collection', $id);
            }
            $product = Product::select('products.*')
                ->join('descriptions', 'products.id', '=', 'descriptions.id_product')
                ->where('products.id_collection', $id)
                ->whereIn('descriptions.value', $request->texture)
                ->get();
            //get texture
            $description = Description::select('descriptions.value as texture')
            ->join('products', 'products.id', '=', 'descriptions.id_product')
            ->where('products.id_collection', $id)
            ->where('descriptions.name', 'Тексеура')
            ->groupBy('descriptions.value')
            ->get();
        }
        return view('collection', [
            'collection' => $collection,
            'product' => $product,
            'description' => $description
        ]);
    }

    public function filterEn(Request $request, $id)
    {
        $collection = Collection::where('id', $id)->first();

        if ($collection->category->name == 'Столешницы') {
            //cek filter
            if ($request->series == null) {
                return redirect()->route('frontend.collectionEn', $id);
            }
            $product = Product::select('products.*')
                ->join('descriptions', 'products.id', '=', 'descriptions.id_product')
                ->where('products.id_collection', $id)
                ->whereIn('descriptions.value', $request->series)
                ->get();
            //get series
            $description = Description::select('descriptions.value as series')
                        ->join('products', 'products.id', '=', 'descriptions.id_product')
                        ->where('products.id_collection', $id)
                        ->where('descriptions.name', 'Серия')
                        ->groupBy('descriptions.value')
                        ->get();
        } elseif($collection->category->name == 'ЛДСП') {
            //cek filter
            if ($request->texture == null) {
                return redirect()->route('frontend.collectionEn', $id);
            }
            $product = Product::select('products.*')
                ->join('descriptions', 'products.id', '=', 'descriptions.id_product')
                ->where('products.id_collection', $id)
                ->whereIn('descriptions.value', $request->texture)
                ->get();
            //get texture
            $description = Description::select('descriptions.value as texture')
            ->join('products', 'products.id', '=', 'descriptions.id_product')
            ->where('products.id_collection', $id)
            ->where('descriptions.name', 'Тексеура')
            ->groupBy('descriptions.value')
            ->get();
        }
        return view('collection_en', [
            'collection' => $collection,
            'product' => $product,
            'description' => $description
        ]);
    }

    public function visualizer()
    {
        $product = Product::all();
        return view('visualizer', [
            'product' => $product
        ]);
    }
}
