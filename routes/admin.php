<?php

//admin pages

use App\Http\Controllers\Admin\AdminIndexController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [AdminIndexController::class , 'index'])->name('admin.index')->middleware(['auth', 'can:admin']);