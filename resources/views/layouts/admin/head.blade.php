<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

{!! SEO::generate() !!}

{{ Html::style(mix('/css/admin.css')) }}

@stack('head')