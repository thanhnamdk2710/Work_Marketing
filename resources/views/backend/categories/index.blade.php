@extends('backend.layouts.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{ route('admin.dashboard') }}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><span>Categories</span></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>List Categories</h2>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Well done!</strong> {{ Session::get('success') }}
                </div>
            @endif
            <div class="box-content">
                @if(count($categories))
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $key => $category)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="center">{{ $category->name }}</td>
                                <td class="center">
                                    @if($category->status)
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-important">Unactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                    @if($category->status)
                                        <a class="btn btn-danger"
                                           href="{{ route('categories.status', $category->id) }}">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-success"
                                           href="{{ route('categories.status', $category->id) }}">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                    @endif
                                    <a class="btn btn-info" href="{{ route('categories.edit', $category->id) }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>

                                    {{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE', 'class' => 'form-inline']) }}
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
                @else
                    <div class="alert alert-block ">
                        <strong>Warning!</strong> Category not found!
                    </div>
                @endif
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection