@extends('layouts.admin')

@section('content')
    <div class="col-12 col-lg-10">
        <div class="py-4 px-0">
            <h1>Add Reference</h1>
            <div class="row">
                <div class="col-12">
                    {{ Form::open(['route' => 'admin.portfolio.store', 'files' => true]) }}
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', null, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('subtitle', 'Subtitle') }}
                            {{ Form::text('subtitle', null, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('collaboration', 'Collaboration') }}
                            {{ Form::text('collaboration', null) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::text('description', null, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('color_code', 'Color code') }}
                            {{ Form::text('color_code', null, ['class' => 'colorpicker', 'required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('sort', 'Sort') }}
                            {{ Form::number('sort', null, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('pic_path', 'Picture') }}
                            {{ Form::file('pic_path', null, ['required']) }}
                        </div>
                        <div class="col-12 d-flex align-items-center">
                            {{ Form::checkbox('active', null, true, ['class' => 'checkbox mr-2']) }}
                            {{ Form::label('active', 'Active',['class' => 'd-inline-block mb-0 ml-2']) }}
                        </div>
                        <div class="form-group text-center col-12">
                            {{ Form::hidden('img_width', null) }}
                            {{ Form::submit('Submit', ['class' => 'd-inline-block button button-blue']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="row preview-holder">
                <div class="col-12 col-md-6">
                    <div class="preview"></div>
                    <div class="form-group">
                        {{ Form::label('image-size', 'Image size (px)') }}
                        {{ Form::number('image-size', null, ['min' => 0, 'max' => 420]) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection