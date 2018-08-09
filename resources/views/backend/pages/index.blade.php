@extends('backend.layouts.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{ route('admin.dashboard') }}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><span>Pages</span></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>List Pages</h2>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Well done!</strong> {{ Session::get('success') }}
                </div>
            @endif
            <div class="box-content">
                @if(count($pages))
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Page Name</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pages as $key => $page)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="center">{{ $page->name }}</td>
                                <td class="center">
                                    {{ $page->slug }}
                                </td>
                                <td class="center">
                                    <a class="btn btn-info" href="{{ route('pages.edit', $page->id) }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>

                                    {{ Form::open(['route' => ['pages.destroy', $page->id], 'method' => 'DELETE', 'class' => 'form-inline']) }}
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
                        <strong>Warning!</strong> Brand not found!
                    </div>
                @endif
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection