@extends('layouts.admin')

@section('content')
    <div class="col-12 col-lg-10">
        <div class="py-4 px-0">
            <h1>Add Social</h1>
            <div class="row">
                <div class="col-12">
                    {{ Form::open(['route' => 'admin.socials.store']) }}
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('icon', 'Icon') }}
                            {{ Form::text('icon', null, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('link1', 'Link1') }}
                            {{ Form::text('link1', null, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('link2', 'Link2') }}
                            {{ Form::text('link2', null, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('target_url', 'Traget URL') }}
                            {{ Form::text('target_url', null, ['required']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('sort', 'Sort') }}
                            {{ Form::number('sort', null, ['required']) }}
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