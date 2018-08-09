@extends('backend.layouts.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{ route('admin.dashboard') }}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><span>Products</span></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>List Products</h2>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Well done!</strong> {{ Session::get('success') }}
                </div>
            @endif
            <div class="box-content">
                @if(count($products))
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Image</th>
                            <th>Products Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $product)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="center">
                                    <img src="{{ asset($product->image) }}" style="width: 80px; height: 80px">
                                </td>
                                <td class="center">{{ $product->name }}</td>
                                <td class="center">{{ $product->category->name }}</td>
                                <td class="center">{{ $product->brand->name }}</td>
                                <td class="center">{{ $product->price }}</td>
                                <td class="center">
                                    @if($product->status)
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-important">Unactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                    @if($product->status)
                                        <a class="btn btn-danger"
                                           href="{{ route('products.status', $product->id) }}">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-success"
                                           href="{{ route('products.status', $product->id) }}">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                    @endif
                                    <a class="btn btn-info" href="{{ route('products.edit', $product->id) }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>

                                    {{ Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE', 'class' => 'form-inline']) }}
                                        {{ Form::button(
                                            '<i class="halflings-icon white trash"></i>',
                                            ['type' => 'submit', 'class' => 'btn btn-danger']
                                        ) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                @else
                    <div class="alert alert-block ">
                        <strong>Warning!</strong> Category not found!
                    </div>
                @endif
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection