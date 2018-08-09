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
        <a href="{{ route('shop.index') }}">Shop</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <span>Edit Shop</span>
    </li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Shop</h2>
        </div>
        <div class="box-content">
            {{ Form::open(['route' => ['shop.update', $shop->id], 'method' => 'PUT', 'class' => 'form-horizontal']) }}
            <fieldset>
                <div class="control-group">
                    {{ Form::label('name', 'Shop Name', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('name', $shop->name, ['class' => 'input-xlarge', 'placeholder' => 'Enter Shop Name']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('description', 'Description', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('description', $shop->description, ['class' => 'input-xlarge', 'placeholder' => 'Enter Description']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('keyword', 'Keyword', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('keyword', $shop->keyword, ['class' => 'input-xlarge', 'placeholder' => 'Enter KeyWord']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('phone', 'Phone', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('phone', $shop->phone, ['class' => 'input-xlarge', 'placeholder' => 'Enter Phone']) }}
                    </div>
                </div><div class="control-group">
                    {{ Form::label('email', 'Email', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('email', $shop->email, ['class' => 'input-xlarge', 'placeholder' => 'Enter Email']) }}
                    </div>
                </div><div class="control-group">
                    {{ Form::label('facebook', 'Facebook', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('facebook', $shop->facebook, ['class' => 'input-xlarge', 'placeholder' => 'Enter Facebook']) }}
                    </div>
                </div><div class="control-group">
                    {{ Form::label('youtube', 'Youtube', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('youtube', $shop->youtube, ['class' => 'input-xlarge', 'placeholder' => 'Enter Youtube']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('google', 'Google', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('google', $shop->google, ['class' => 'input-xlarge', 'placeholder' => 'Enter Google']) }}
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