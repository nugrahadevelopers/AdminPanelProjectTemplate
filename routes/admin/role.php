<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::post('roles/list', [RoleController::class, 'listRole'])->name('admin.roles.list');
Route::get('roles', [RoleController::class, 'index'])->name('admin.roles.index');
Route::post('roles', [RoleController::class, 'store']);
Route::put('roles/{role}', [RoleController::class, 'update'])->name('admin.roles.update');
Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('admin.roles.destroy');
