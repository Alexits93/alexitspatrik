@extends('layouts.admin')

@section('content')
    <div class="col-12 col-lg-10 col-xl-8">
        <div class="py-4 px-0">
            <h1>Settings</h1>
            <div class="row">
                <div class="col-12">
                    {{ Form::open(['route' => ['admin.settings.update', $setting]]) }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('firstname', 'Firstname') }}
                            {{ Form::text('firstname', $setting->firstname) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('lastname', 'Lastname') }}
                            {{ Form::text('lastname', $setting->lastname) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('date_of_birth', 'Date of birth') }}
                            {{ Form::text('date_of_birth', $setting->date_of_birth, ['class' => 'datepicker']) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('place_of_birth', 'Place of birth') }}
                            {{ Form::text('place_of_birth', $setting->place_of_birth) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('phone', 'Phone number') }}
                            {{ Form::text('phone', $setting->phone) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('email', 'Email address') }}
                            {{ Form::text('email', $setting->email) }}
                        </div>
                        <div class="form-group col-12 col-md-6">
                            {{ Form::label('nationality', 'Nationality') }}
                            {{ Form::text('nationality', $setting->nationality) }}
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