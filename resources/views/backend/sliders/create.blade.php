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
        <a href="{{ route('sliders.index') }}">Sliders</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <span>Add New Slider</span>
    </li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Slider</h2>
        </div>
        <div class="box-content">
            {{ Form::open(['route' => 'sliders.store', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) }}
            <fieldset>
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
                <div class="control-group hidden-phone">
                    {{ Form::label('status', 'Publication Status', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::checkbox ('status', true, true) }}
                    </div>
                </div>
                <div class="form-actions">
                    {{ Form::submit ('Add New Slider', ['class' => 'btn btn-primary']) }}
                    {{ Form::reset ('Cancel', ['class' => 'btn']) }}
                </div>
            </fieldset>
            {{ Form::close() }}
        </div>
    </div><!--/span-->
</div><!--/row-->
@endsection