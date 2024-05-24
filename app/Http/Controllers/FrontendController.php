<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Description;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Career;
use App\Models\CareerDetail;

use \Statickidz\GoogleTranslate;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $slider = Slider::all();
        return view('index', compact('slider'));
    }

    public function indexEn(){
        $slider = Slider::all();
        return view('index_en', compact('slider'));
    }

    public function category($name) {
        $category = Category::where('name', $name)->first();

        if ($category == null) {
            $collection = null;
        } else {
            $collection = Collection::where('id_category', $category->id)->get();
        }

        if ($name == 'Межкомнатные двери' || $name == 'МЕЖКОМНАТНЫЕ ДВЕРИ') {
            $product = Product::select('products.*')
            ->join('collections', 'collections.id', '=', 'products.id_collection')
            ->join('categories', 'categories.id', '=', 'collections.id_category')
            ->where('categories.name', 'Межкомнатные двери')
            ->get();
            return view('category_door', compact('product', 'category'));
        } elseif (($category->name1 == 'ПЛИТНЫЕ МАТЕРИАЛЫ' && $category->name !== 'ЛДСП') || ($category->name1 == 'СТРОИТЕЛЬНЫЕ МАТЕРИАЛЫ' && $category->name !== 'СТЕНОВЫЕ ПАНЕЛИ')) {

            //get collection
            $getCollection = Collection::where('id_category', $category->id)->first();
            return redirect()->route('frontend.collection', $getCollection->id);

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

        if ($name == 'Межкомнатные двери' || $name == 'МЕЖКОМНАТНЫЕ ДВЕРИ') {
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

    public function contact()
    {
        return view('contact');
    }

    public function contactEn()
    {
        return view('contact_en');
    }

    public function contactStore(Request $request, $id)
    {
        $validateData = $this->validate($request, [
            'name' => 'required||string',
            'email' => 'required||string',
            'phone' => 'required||string',
            'message' => 'required||string'
        ]);

        $contact = Contact::create($validateData);
        if ($contact) {
            if ($id == 1) {
                return redirect()->route('frontend.contact');
            } else {
                return redirect()->route('frontend.contactEn');
            }
        }
    }

    public function career()
    {
        $career = Career::all();
        return view('career', [
            'career' => $career
        ]);
    }

    public function careerEn()
    {
        $career = Career::all();
        return view('career_en', [
            'career' => $career
        ]);
    }

    public function careerDetail($id)
    {   
        $careerDetail = CareerDetail::where('id_career', $id)->first();
        return view('career_detail', [
            'careerDetail' => $careerDetail
        ]);
    }

    public function careerDetailEn($id)
    {   
        $careerDetail = CareerDetail::where('id_career', $id)->first();
        return view('career_detail_en', [
            'careerDetail' => $careerDetail
        ]);
    }

    public function allProduct(Request $request)
    {   
        $product = null;
        return view('filter_product', [
            'product' => $product
        ]);
    }

    public function filterProduct(Request $request)
    {
        $name = $request->name; 
        $collection = $request->id_collection; 
        $category = $request->id_category;
        $series = $request->series; 
        $texture = $request->texture;
        $product = Product::select('products.*')
        ->join('descriptions', 'products.id', '=', 'descriptions.id_product')
        ->join('collections', 'collections.id', '=', 'products.id_collection')
        ->join('categories', 'categories.id', '=', 'collections.id_category')
        ->where(function ($query) {
            $query->where('descriptions.name', '=', 'Серия')
                  ->orWhere('descriptions.name', '=', 'Тексеура');
        });

        if ($name != null) {
            $product = $product->whereIn('products.id', $name);
        }

        if ($series != null) {
            $product = $product->orWhereIn('descriptions.value', $series);
        }

        if ($texture != null) {
            $product = $product->orWhereIn('descriptions.value', $texture);
        }

        if ($category != null) {
            $product = $product->orWhereIn('categories.id', $category);
        }

        if ($collection != null) {
            $product = $product->orWhereIn('collections.id', $collection);
        }

        $product = $product->groupBy('products.id')->get();

        // ->where(function ($query) use ($series, $texture) {
        //     $query->whereIn('descriptions.value', $series)
        //           ->orWhereIn('descriptions.value', $texture);
        // })->orWhere(function ($query) use ($collection, $category) {
        //     $query->whereIn('categories.id', $category)
        //           ->orWhereIn('collections.id', $collection);
        // })->groupBy('products.id')->get();
        
        return view('filter_product', [
            'product' => $product
        ]);
    }
}
