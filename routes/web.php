<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    require __DIR__ . '/admin/dashboard.php';
    require __DIR__ . '/admin/user.php';
    require __DIR__ . '/admin/role.php';
});

require __DIR__ . '/auth.php';
