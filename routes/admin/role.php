<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::post('roles/list', [RoleController::class, 'listRole'])->name('admin.roles.list');
