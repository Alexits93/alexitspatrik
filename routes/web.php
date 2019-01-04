<?php

use App\Models\Page;
use Illuminate\Support\Facades\Cache;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/download-cv', 'HomeController@cv')->name('cv_download');

$pages = Cache::remember('pages',60,function(){
    return Page::orderBy('sort')->get();
});

foreach ($pages as $p) {
    Route::get($p->slug, function () use ($p) {
        $page = Page::where('slug', $p->slug)->firstOrfail();
        return view('page', compact('page'));
    });
}
