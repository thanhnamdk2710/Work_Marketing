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
        <a href="{{ route('brands.index') }}">Brands</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <span>Add New Brand</span>
    </li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Brand</h2>
        </div>
        <div class="box-content">
            {{ Form::open(['route' => 'brands.store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
            <fieldset>
                <div class="control-group">
                    {{ Form::label('name', 'Brand Name', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('name', '', ['class' => 'input-xlarge', 'placeholder' => 'Enter Brand Name']) }}
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    {{ Form::label('status', 'Publication Status', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::checkbox ('status', true, true) }}
                    </div>
                </div>
                <div class="form-actions">
                    {{ Form::submit ('Add New Brand', ['class' => 'btn btn-primary']) }}
                    {{ Form::reset ('Cancel', ['class' => 'btn']) }}
                </div>
            </fieldset>
            {{ Form::close() }}
        </div>
    </div><!--/span-->
</div><!--/row-->
@endsection