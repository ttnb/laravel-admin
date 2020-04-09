<?php

Route::namespace('MySang\LaravelAdmin\Controllers')
->prefix('admin')
->name('admin.')
->middleware([])
->group(function() {
    Route::get('/', function() {
        echo '123';
    });
});