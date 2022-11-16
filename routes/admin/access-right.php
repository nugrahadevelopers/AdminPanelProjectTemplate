<?php

use App\Http\Controllers\Admin\User\AccessRightController;
use Illuminate\Support\Facades\Route;

Route::get('access-rights', [AccessRightController::class, 'index'])->name('admin.access-rights.index');
