<?php

Route::get('admin',function(){
    return redirect()->to('admin/login');
});

Route::get('admin/login','Auth\LoginController@showLoginForm');
Route::post('admin/login','Auth\LoginController@login');
Route::get('admin/logout','Auth\LoginController@logout')->name('admin-logout');

Route::name('admin.')->namespace('Admin')->prefix('admin')->middleware('auth')->group(function () {
    Route::resource('dashboard','DashboardController');
    Route::resource('settings','SettingsController');
    Route::resource('socials','SocialsController');
});