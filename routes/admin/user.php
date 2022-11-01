<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
Route::post('users', [UserController::class, 'store']);
Route::put('users/{user}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
