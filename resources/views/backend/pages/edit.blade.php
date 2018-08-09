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
            <a href="{{ route('pages.index') }}">Pages</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <span>Edit Page</span>
        </li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Page</h2>
            </div>
            <div class="box-content">
                {{ Form::open(['route' => ['pages.update', $page->id], 'method' => 'PUT', 'class' => 'form-horizontal']) }}
                <fieldset>
                    <div class="control-group">
                        {{ Form::label('name', 'Page Name', ['class' => 'control-label']) }}
                        <div class="controls">
                            {{ Form::text('name', $page->name, ['class' => 'input-xlarge', 'placeholder' => 'Enter Brand Name']) }}
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        {{ Form::label('page_content', 'Content', ['class' => 'control-label']) }}
                        <div class="controls">
                            {{ Form::textarea ('page_content', $page->content, ['class' => 'cleditor', 'placeholder' => 'Enter Content']) }}
                        </div>
                    </div>
                    <div class="form-actions">
                        {{ Form::submit ('Save', ['class' => 'btn btn-primary']) }}
                    </div>
                </fieldset>
                {{ Form::close() }}
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection