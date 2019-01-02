<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.head')
</head>
<body>

@include('layouts.header')

<div class="content">
    @yield('content')
</div>

@include('layouts.footer')

</body>
</html>