@extends('frontend.layouts.master')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian">
                            @if(count($categories))
                                @foreach($categories as $category)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="{{ route('frontend', $category->slug) }}">{{ $category->name }}</a></h4>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <span>Không có danh mục nào</span>
                            @endif
                        </div>

                        <div class="brands_products">
                            <h2>Thương hiệu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @if(count($brands))
                                        @foreach($brands as $brand)
                                            <li>
                                                <a href="{{ route('user.brand', $brand->slug) }}">
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
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">Brand {{ $brand->name }}</h2>
                        @if(count($products))
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
                        @else
                            <div class="alert alert-warning">
                                Products Not Found
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection