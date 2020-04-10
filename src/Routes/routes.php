<?php

/*
|--------------------------------------------------------------------------
| Admin authentication routes
|--------------------------------------------------------------------------
|
*/

Route::get('admin-login', 'MySang\LaravelAdmin\Controllers\AdminAuthController@login')
->middleware(['web'])
->name('admin_login');

/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
|
*/

Route::namespace('MySang\LaravelAdmin\Controllers')
->prefix('admin')
->name('admin.')
->middleware([])
->group(function() {
    Route::get('/', 'AdminController@index')
    ->middleware([])
    ->name('index');
});
