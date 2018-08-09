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
                    <div class="blog-post-area">
                        <h2 class="title text-center">Bài viết mới</h2>
                        @if(count($news))
                            @foreach($news as $new)
                                <div class="single-blog-post">
                                    <h3>{{ $new->name }}</h3>
                                    <div class="post-meta">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>{{ date_format($new->created_at, "H:i:s") }}</li>
                                            <li><i class="fa fa-calendar"></i>{{ date_format($new->created_at, "d-m-Y") }}</li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('user.blog', $new->slug) }}">
                                        <img src="{{ asset($new->image) }}" alt="">
                                    </a>
                                    <p>{!! $new->description !!}</p>
                                    <a  class="btn btn-primary" href="{{ route('frontend', $new->slug) }}">Đọc thêm</a>
                                </div>
                            @endforeach
                            {{ $news->links() }}
                        @else
                            <div class="alert alert-warning">
                                Chưa có bài viết nào
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection