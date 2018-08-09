@extends('backend.layouts.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{ route('admin.dashboard') }}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><span>Shop</span></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Infomation Shop</h2>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Well done!</strong> {{ Session::get('success') }}
                </div>
            @endif
            <div class="box-content">
                <a class="btn btn-info" href="{{ route('shop.edit', 1) }}">
                    <i class="halflings-icon white edit"></i> Edit
                </a>
                <table class="table table-responsive table-striped table-bordered">
                    <tr>
                        <td>Name:</td>
                        <td>{{ $shop->name }}</td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td>{{ $shop->description }}</td>
                    </tr>
                    <tr>
                        <td>Keyword:</td>
                        <td>{{ $shop->keyword }}</td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>{{ $shop->phone }}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{ $shop->email }}</td>
                    </tr>
                    <tr>
                        <td>Facebook:</td>
                        <td>{{ $shop->facebook }}</td>
                    </tr>
                    <tr>
                        <td>Youtube:</td>
                        <td>{{ $shop->youtube }}</td>
                    </tr>
                    <tr>
                        <td>Google:</td>
                        <td>{{ $shop->google }}</td>
                    </tr>
                </table>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection