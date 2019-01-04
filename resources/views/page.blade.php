@extends('layouts.app')

@section('content')
    <div id="page">
        <div class="container px-0 w-lg-790">
            <h1 class="text-center f-primary mb-40" data-aos="fade-down">{{ $page->title }}</h1>
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    {!! $page->text !!}
                </div>
            </div>
        </div>
    </div>
@endsection