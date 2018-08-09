@extends('frontend.layouts.master')

@section('title')
    Giới thiệu || {{ Session::get('shop')->name }}
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">
                            @if(count($categories))
                                @foreach($categories as $category)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="{{ route('user.category', $category->id) }}">{{ $category->name }}</a></h4>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <span>Category Not Found</span>
                            @endif
                        </div>

                        <div class="brands_products">
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @if(count($brands))
                                        @foreach($brands as $brand)
                                            <li><a href="#"> <span class="pull-right">(50)</span>{{ $brand->name }}</a></li>
                                        @endforeach
                                    @else
                                        <span>Brands Not Found</span>
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">Giới thiệu về chúng tôi</h2>
                        <div class="about-content">
                            {!! $about->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection