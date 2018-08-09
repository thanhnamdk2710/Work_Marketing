@extends('frontend.layouts.master')

@section('title')
    Home || {{ Session::get('shop')->name }}
@endsection

@section('content')
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($sliders as $key => $slider)
                                <li data-target="#slider-carousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>

                        <div class="carousel-inner">
                            @foreach($sliders as $key => $slider)
                                <div class="{{ $key == 0 ? 'item active' : 'item' }}">
                                    <img src="{{ asset($slider->image) }}">
                                </div>
                            @endforeach
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh danh sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian">
                            @if(count($categories))
                                @foreach($categories as $category)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="{{ route('user.category', $category->slug) }}">{{ $category->name }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <span>Chưa có danh mục nào</span>
                            @endif
                        </div>

                        <div class="brands_products">
                            <h2>Thương hiệu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @if(count($brands))
                                        @foreach($brands as $brand)
                                            <li>
                                                <a href="{{ route('frontend', $brand->slug) }}">
                                                    <span class="pull-right">
                                                        ({{ count($brand->products) }})
                                                    </span>{{ $brand->slug }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <span>Chưa có thương hiệu nào</span>
                                    @endif

                                </ul>
                            </div>
                        </div>

                        <div class="shipping text-center">
                            <img src="{{ asset('frontend/images/home/shipping.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">Sản phẩm mới</h2>
                        @foreach($products as $product)
                            <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset($product->image) }}" alt="" />
                                        <h2>{{ $product->price }} VNĐ</h2>
                                        <p>{{ $product->name }}</p>
                                        <a href="{{ route('user.product', $product->slug) }}" class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>Chi tiết
                                        </a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{ $product->price }} VNĐ</h2>
                                            <p>{{ $product->name }}</p>
                                            <a href="{{ route('user.product', $product->slug) }}" class="btn btn-default add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>Chi tiết
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="recommended_items">
                        <h2 class="title text-center">Sản phẩm đề xuất</h2>
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @for($i = 0; $i < count($recomment_products); $i += 3)
                                    <div class="item {{ $i == 0 ? 'active' : '' }}">
                                        @for($j = 0; $j < 3; $j++)
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset($recomment_products[$i + $j]->image) }}" alt="" />
                                                            <h2>{{ $recomment_products[$i + $j]->price }} VNĐ</h2>
                                                            <p>{{ $recomment_products[$i + $j]->name }}</p>
                                                            <a href="{{ route('frontend', $recomment_products[$i + $j]->slug) }}" class="btn btn-default add-to-cart">
                                                                <i class="fa fa-shopping-cart"></i>Chi tiết
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                @endfor
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection