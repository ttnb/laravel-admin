<?php
dd(app('roles'));
$getRoles = config('laraveladmin.roles');
$roles = (array) @array_keys($getRoles);


// Route::namespace('MySang\LaravelAdmin\Controllers')
//     ->name('admin')
//     ->prefix('admin.')
//     ->middleware([])