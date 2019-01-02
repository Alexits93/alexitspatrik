<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.admin.head')
</head>
<body>

@include('layouts.admin.header')

<div class="content">
    @yield('content')
</div>

@include('layouts.admin.footer')
@include('layouts.admin.mobile-menu')

</body>
</html>