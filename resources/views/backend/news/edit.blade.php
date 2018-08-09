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
        <a href="{{ route('news.index') }}">News</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <span>Edit News</span>
    </li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit News</h2>
        </div>
        <div class="box-content">
            {{ Form::open(['route' => ['news.update', $new->id], 'method' => 'PUT', 'class' => 'form-horizontal', 'files' => true]) }}
            <fieldset>
                <div class="control-group">
                    {{ Form::label('name', 'Title', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::text('name', $new->name, ['class' => 'input-xlarge', 'placeholder' => 'Enter Title']) }}
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    {{ Form::label('description', 'Description', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::textarea ('description', $new->description, ['class' => 'cleditor', 'placeholder' => 'Enter Description']) }}
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    {{ Form::label('news_content', 'Content', ['class' => 'control-label']) }}
                    <div class="controls">
                        {{ Form::textarea ('news_content', $new->content, ['class' => 'cleditor', 'placeholder' => 'Enter Content']) }}
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