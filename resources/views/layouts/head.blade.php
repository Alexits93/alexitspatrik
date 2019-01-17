<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

{!! Html::style('apple-touch-icon-57x57.png',['sizes'=>'57x57','rel'=>'apple-touch-icon-precomposed']) !!}
{!! Html::style('apple-touch-icon-114x114.png',['sizes'=>'114x114','rel'=>'apple-touch-icon-precomposed']) !!}
{!! Html::style('apple-touch-icon-72x72.png',['sizes'=>'72x72','rel'=>'apple-touch-icon-precomposed']) !!}
{!! Html::style('apple-touch-icon-144x144.png',['sizes'=>'144x144','rel'=>'apple-touch-icon-precomposed']) !!}
{!! Html::style('apple-touch-icon-120x120.png',['sizes'=>'120x120','rel'=>'apple-touch-icon-precomposed']) !!}
{!! Html::style('apple-touch-icon-152x152.png',['sizes'=>'152x152','rel'=>'apple-touch-icon-precomposed']) !!}
{!! Html::style('favicon-96x96.png',['type'=>'image/png','sizes'=>'96x96','rel'=>'icon']) !!}
{!! Html::style('favicon-32x32.png',['type'=>'image/png','sizes'=>'32x32','rel'=>'icon']) !!}
{!! Html::style('favicon-16x16.png',['type'=>'image/png','sizes'=>'16x16','rel'=>'icon']) !!}
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

{!! SEO::generate() !!}

{{ Html::style(mix('/css/app.css'), ['rel' => 'stylesheet', 'media' => 'all']) }}

@stack('head')