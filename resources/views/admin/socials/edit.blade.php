@extends('layouts.admin')

@section('content')
    <div class="col-12 col-lg-10">
        <div class="py-4 px-0">
            <h1>{{ $social->name }} edit</h1>
            <div class="row">
                <div class="col-12">
                    {{ Form::open(['route' => ['admin.socials.update', $social]]) }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', $social->name, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('icon', 'Icon') }}
                            {{ Form::text('icon', $social->icon, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('link1', 'Link1') }}
                            {{ Form::text('link1', $social->link1, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('link2', 'Link2') }}
                            {{ Form::text('link2', $social->link2, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('target_url', 'Target URL') }}
                            {{ Form::text('target_url', $social->target_url, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('sort', 'Sort') }}
                            {{ Form::number('sort', $social->sort, ['required']) }}
                        </div>
                        <div class="form-group text-center col-12   ">
                            {{ Form::submit('Submit', ['class' => 'd-inline-block button button-blue']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection