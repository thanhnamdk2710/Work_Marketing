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
        <a href="{{ route('categories.index') }}">Products</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <span>Add New Products</span>
    </li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Products</h2>
        </div>
        <div class="box-content">
            {{ Form::open(['route' => 'products.store', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) }}
            <fieldset>
                <div class="control-group">
                    {{ Form::label('name', 'Product Name', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('name', '', ['class' => 'input-xlarge', 'placeholder' => 'Enter Product Name']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('category', 'Product Category', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::select('category', $categories, null, ['placeholder' => 'Pick A Category...']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('brand', 'Product Brand', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::select('brand', $brands, null, ['placeholder' => 'Pick A Brand...']) }}
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    {{ Form::label('description', 'Description', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::textarea ('description', '', ['class' => 'cleditor', 'placeholder' => 'Enter Product Description']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('price', 'Product Price', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('price', '', ['class' => 'input-xlarge', 'placeholder' => 'Enter Product Price']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('image', 'Image', ['class' => 'control-label']) }}
                    <div class="controls">
                        <div class="uploader">
                            {{ Form::file('image') }}
                            <span class="filename" style="user-select: none;">No file selected</span>
                            <span class="action" style="user-select: none;">Choose File</span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('size', 'Product Size', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('size', '', ['class' => 'input-xlarge', 'placeholder' => 'Enter Product Size']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('color', 'Product Color', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('color', '', ['class' => 'input-xlarge', 'placeholder' => 'Enter Product Color']) }}
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    {{ Form::label('status', 'Publication Status', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::checkbox ('status', true, true) }}
                    </div>
                </div>
                <div class="form-actions">
                    {{ Form::submit ('Add New Product', ['class' => 'btn btn-primary']) }}
                    {{ Form::reset ('Cancel', ['class' => 'btn']) }}
                </div>
            </fieldset>
            {{ Form::close() }}
        </div>
    </div><!--/span-->
</div><!--/row-->
@endsection