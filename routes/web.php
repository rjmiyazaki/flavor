<?php

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin.home');
});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();


