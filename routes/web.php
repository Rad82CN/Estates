<?php

use App\Http\Controllers\EstateController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//simple routes
Route::get('/', [IndexController::class , 'index'])->name('index');
Route::get('/terms', [TermsController::class , 'terms'])->name('terms');
Route::get('/support', [SupportController::class , 'support'])->name('support');

//routes for showing and updating a profile
Route::get('/profile', [UserController::class , 'profile'])->name('profile')->middleware('auth');
Route::resource('users', UserController::class)->only(['edit', 'update'])->middleware('auth');
Route::resource('users', UserController::class)->only(['show']);

//routes for creating, showing, editting and deleting Estate posts
Route::resource('estates', EstateController::class)->except(['index', 'show'])->middleware('auth');
Route::resource('estates', EstateController::class)->only(['show']);