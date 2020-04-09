<?php
dd(app('roles'));
$getRoles = config('laraveladmin.roles');
$roles = (array) @array_keys($getRoles);


// Route::namespace('Stackviet\LaravelAdmin\Controllers')
//     ->name('admin')
//     ->prefix('admin.')
//     ->middleware([])