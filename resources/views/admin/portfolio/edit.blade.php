@extends('layouts.admin')

@section('content')
    <div class="col-12 col-lg-10">
        <div class="py-4 px-0">
            <h1>Edit {{ $reference->title }}</h1>
            <div class="row">
                <div class="col-12">
                    {{ Form::open(['route' => ['admin.portfolio.update', $reference], 'files' => true]) }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', $reference->title, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('subtitle', 'Subtitle') }}
                            {{ Form::text('subtitle', $reference->subtitle, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('collaboration', 'Collaboration') }}
                            {{ Form::text('collaboration', $reference->collaboration) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::text('description', $reference->description, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('color_code', 'Color code') }}
                            {{ Form::text('color_code', $reference->color_code, ['class' => 'colorpicker', 'required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('sort', 'Sort') }}
                            {{ Form::number('sort', $reference->sort, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('pic_path', 'Picture') }}
                            {{ Form::file('pic_path', null, ['required']) }}
                        </div>
                        <div class="col-12 d-flex align-items-center">
                            {{ Form::checkbox('active', null, $reference->active, ['class' => 'checkbox mr-2']) }}
                            {{ Form::label('active', 'Active',['class' => 'd-inline-block mb-0 ml-2']) }}
                        </div>
                        <div class="form-group text-center col-12">
                            {{ Form::hidden('img_width', $reference->img_width) }}
                            {{ Form::submit('Submit', ['class' => 'd-inline-block button button-blue']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="row preview-holder show">
                <div class="col-12 col-md-6">
                    <div class="preview"></div>
                    <div class="form-group">
                        {{ Form::label('image-size', 'Image size (px)') }}
                        {{ Form::number('image-size', $reference->img_width, ['min' => 0, 'max' => 420]) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
           $('.preview').css({
               'background-color' : '{{ $reference->color_code }}',
               'background-image' : 'url("{{ url()->to($reference->pic_path) }}")',
               'background-size' : '{{ $reference->img_width }}' + 'px'
           })
        });
    </script>
@endsection