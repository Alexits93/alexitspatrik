@extends('layouts.app')
@section('content')
    <div id="login">
        <div class="container px-0 py-80">
            <h2 class="text-center" data-aos="fade-down">User <span class="f-blue bold-text">login</span></h2>
            <div class="row" data-aos="fade-up">
                <div class="col-12">
                    {{ Form::open(['action' => 'Auth\LoginController@login']) }}
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'Password') }}
                        {{ Form::password('password', null) }}
                    </div>
                    <div class="form-group text-center mb-0">
                        {{ Form::submit('Login', ['class' => 'button button-blue']) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection