@extends('layouts.admin')

@section('content')
    <div class="col-12 col-lg-10">
        <div class="py-4 px-0">
            <h1>Edit {{ $page->title }}</h1>
            <div class="row">
                <div class="col-12">
                    {{ Form::open(['route' => ['admin.pages.update', $page]]) }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="form-group col-6">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', $page->title, ['required']) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            {{ Form::label('text', 'Text') }}
                            {!! Form::textarea('text', $page->text, ['class' => 'summernote', 'required']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            {{ Form::checkbox('active', null, $page->active, ['class' => 'checkbox mr-2']) }}
                            {{ Form::label('active', 'Active',['class' => 'd-inline-block mb-0 ml-2']) }}
                        </div>
                        <div class="form-group text-center col-6">
                            {{ Form::submit('Submit', ['class' => 'd-inline-block button button-blue']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection