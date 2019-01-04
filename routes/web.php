<?php

use App\Models\Page;

Route::get('/', 'HomeController@index')->name('home');

$pages = Page::get();
foreach ($pages as $p) {
    Route::get($p->slug, function () use ($p) {
        $page = Page::where('slug', $p->slug)->firstOrfail();
        return view('page', compact('page'));
    });
}
