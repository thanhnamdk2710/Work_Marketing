<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(5);

        return view('backend.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $selectCategory = [];
        foreach ($categories as $category) {
            $selectCategory[$category->id] = $category->name;
        }
        $brands = Brand::all();
        $selectBrand = [];
        foreach ($brands as $brand) {
            $selectBrand[$brand->id] = $brand->name;
        }

        return view('backend.products.create', ['categories' => $selectCategory, 'brands' => $selectBrand]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->status = $request->status ? true : false;

        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'images/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $product->image = $image_url;
            } else {
                $product->image = '';
            }
        }
        $product->save();

        return redirect()->route('products.index')->with('success', 'You successfully added the product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $selectCategory = [];
        foreach ($categories as $category) {
            $selectCategory[$category->id] = $category->name;
        }
        $brands = Brand::all();
        $selectBrand = [];
        foreach ($brands as $brand) {
            $selectBrand[$brand->id] = $brand->name;
        }

        return view('backend.products.edit',
                    [
                        'product' => $product,
                        'categories' => $selectCategory,
                        'brands' => $selectBrand
                    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->status = $request->status ? true : false;

        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'images/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                unlink($product->image);
                $product->image = $image_url;
            }
        }
        $product->save();

        return redirect()->route('products.index')->with('success', 'You successfully updated the product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        unlink($product->image);
        $product->delete();

        return back()->with('success', 'You successfully deleted the product');
    }

    public function status($id)
    {
        $product = Product::find($id);
        $product->status = !$product->status;
        $product->save();

        return back()->with('success', 'You successfully updated the status');
    }
}
