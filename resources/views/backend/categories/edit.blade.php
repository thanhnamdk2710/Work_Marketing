@extends('backend.layouts.master')

@section('content')
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{ route('admin.dashboard') }}">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-home"></i>
        <a href="{{ route('categories.index') }}">Categories</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <span>Edit Category</span>
    </li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Category</h2>
        </div>
        <div class="box-content">
            {{ Form::open(['route' => ['categories.update', $category->id], 'method' => 'PUT', 'class' => 'form-horizontal']) }}
            <fieldset>
                <div class="control-group">
                    {{ Form::label('name', 'Category Name', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('name', $category->name, ['class' => 'input-xlarge', 'placeholder' => 'Enter Category Name']) }}
                    </div>
                </div>
                <div class="form-actions">
                    {{ Form::submit ('Save', ['class' => 'btn btn-primary']) }}
                    {{ Form::reset ('Cancel', ['class' => 'btn']) }}
                </div>
            </fieldset>
            {{ Form::close() }}
        </div>
    </div><!--/span-->
</div><!--/row-->
@endsection