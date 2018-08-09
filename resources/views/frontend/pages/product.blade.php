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
                                @foreach($categories as $list_category)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="{{ route('user.category', $list_category->slug) }}">
                                                    {{ $list_category->name }}
                                                </a>
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
                                        @foreach($brands as $list_brand)
                                            <li>
                                                <a href="{{ route('frontend', $list_brand->slug) }}">
                                                    <span class="pull-right">
                                                        ({{ count($list_brand->products) }})
                                                    </span>{{ $list_brand->slug }}
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
                    <div class="product-details">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ asset($product->image) }}" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <h2>{{ $product->name }}</h2>
                                <span>
									<span>{{ $product->price }} VNĐ</span>
								</span>
                                <p><b>Danh mục: </b> {{ $product->category->name }}</p>
                                <p><b>Thương hiệu: </b> {{ $product->brand->name }}</p>
                                <?php
                                    $size = explode(', ', $product->size);
                                    $color = explode(', ', $product->color);
                                ?>
                                <p><b>Size: </b>
                                    @foreach($size as $itemSize)
                                        <i class="product-size">{{ $itemSize }}</i>
                                    @endforeach
                                </p>
                                <p><b>Color: </b>
                                    @foreach($color as $itemColor)
                                        <i class="product-size">{{ $itemColor }}</i>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="category-tab shop-details-tab">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#reviews" data-toggle="tab">Chi tiết</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="reviews" >
                                <div class="col-sm-12">
                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>
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