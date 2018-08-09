<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Page;
use App\Product;
use App\Shop;
use App\Slider;
use Illuminate\Http\Request;
use Session;
use DB;
use App\News;

class HomeController extends Controller
{
    public function __construct()
    {
        $shop = Shop::find(1);
        if ($shop) {
            Session::put('shop', $shop);
        }
    }

    public function index()
    {
//        $categories = Category::all();
//        $brands = Brand::all();
//        $products = Product::where('status', true)->orderBy('created_at', 'DESC')->paginate(6);
//        $sliders = Slider::where('status', true)->orderBy('created_at', 'DESC')->get();
//        $recomment_products = Product::orderBy(DB::raw('RAND()'))->take(9)->get();

//        return view('frontend.pages.home',
//            [
//                'categories' => $categories,
//                'brands' => $brands,
//                'products' => $products,
//                'sliders' => $sliders,
//                'recomment_products' => $recomment_products
//            ]
//        );

        return view('frontend.layouts.master');
    }

    public function blog()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $news = News::where('status', true)->orderBy('created_at', 'DESC')->paginate(5);

        return view('frontend.pages.blog',
            [
                'categories' => $categories,
                'brands' => $brands,
                'news' => $news,
            ]
        );
    }

    public function blogDetail($slug)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $new = News::whereSlug($slug)->first();
        if ($new) {
            return view('frontend.pages.blogDetail',
                [
                    'categories' => $categories,
                    'brands' => $brands,
                    'new' => $new,
                ]
            );
        } else {
            return view('frontend.pages.404');
        }
    }

    public function category($slug)
    {
        $category = Category::whereSlug($slug)->first();
        if ($category) {
            $products = Product::where(['category_id' => $category->id, 'status' => true])
                ->orderBy('created_at', 'DESC')
                ->paginate(9);
            $categories = Category::all();
            $brands = Brand::all();

            return view('frontend.pages.category',
                [
                    'categories' => $categories,
                    'brands' => $brands,
                    'products' => $products,
                    'category' => $category
                ]
            );
        } else {
            return view('frontend.pages.404');
        }

    }

    public function brand($slug)
    {
        $brand = Brand::whereSlug($slug)->first();
        if ($brand) {
            $products = Product::where(['brand_id' => $brand->id, 'status' => true])
                ->orderBy('created_at', 'DESC')
                ->paginate(9);
            $categories = Category::all();
            $brands = Brand::all();

            return view('frontend.pages.brand',
                [
                    'categories' => $categories,
                    'brands' => $brands,
                    'products' => $products,
                    'brand' => $brand
                ]
            );
        } else {
            return view('frontend.pages.404');
        }
    }

    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        if ($product) {
            $categories = Category::all();
            $brands = Brand::all();
            $recomment_products = Product::orderBy(DB::raw('RAND()'))->take(9)->get();

            return view('frontend.pages.product',
                [
                    'categories' => $categories,
                    'brands' => $brands,
                    'product' => $product,
                    'recomment_products' => $recomment_products
                ]
            );
        } else {
            return view('frontend.pages.404');
        }
    }

    public function about()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $about = Page::where('slug', 'about')->first();

        return view('frontend.pages.about',
            [
                'categories' => $categories,
                'brands' => $brands,
                'about' => $about
            ]
        );
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function sendContact(Request $request)
    {
        echo "Hello";
//        return view('frontend.pages.contact');
    }

    public function policy()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $policy = Page::where('slug', 'policy')->first();

        return view('frontend.pages.policy',
            [
                'categories' => $categories,
                'brands' => $brands,
                'policy' => $policy
            ]
        );
    }

    public function error404()
    {
        return view('frontend.pages.404');
    }
}
