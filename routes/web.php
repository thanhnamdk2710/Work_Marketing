<?php

// ====Front End============
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog/{slug}', 'HomeController@blogDetail')->name('frontend.blog');
Route::post('/sendContact', 'HomeController@sendContact')->name('sendContact');
Route::get('/policy', 'HomeController@policy')->name('policy');
Route::get('/404', 'HomeController@error404')->name('error404');
Route::get('/category/{slug}', 'HomeController@category')->name('frontend.category');
Route::get('/brand/{slug}', 'HomeController@brand')->name('frontend.brand');
Route::get('/product/{slug}', 'HomeController@product')->name('frontend.product');

// ====Back End============
Route::get('login', 'AdminController@page_login')->name('admin.page_login');
Route::post('login', 'AdminController@login')->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('logout', 'AdminController@logout')->name('admin.logout');

    //  Categoris
    Route::resource('categories', 'CategoryController');
    Route::get('categories/status/{id}', 'CategoryController@status')->name('categories.status');

    //  Brands
    Route::resource('brands', 'BrandController');
    Route::get('brands/status/{id}', 'BrandController@status')->name('brands.status');

    //  Products
    Route::resource('products', 'ProductController');
    Route::get('products/status/{id}', 'ProductController@status')->name('products.status');

    //  Sliders
    Route::resource('sliders', 'SliderController');
    Route::get('sliders/status/{id}', 'SliderController@status')->name('sliders.status');

    //  News
    Route::resource('news', 'NewController');
    Route::get('news/status/{id}', 'NewController@status')->name('news.status');

    //  Page
    Route::resource('pages', 'PageController');

    //  Shop
    Route::resource('shop', 'ShopController');
});