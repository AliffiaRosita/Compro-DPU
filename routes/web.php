<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dashboard/{locale}', [GuestController::class,'dashboardLocale']);
Route::get('/', [GuestController::class,'dashboard']);

// Route::get('contact/create', ['ContactController','index'])->name('contact.create');
Route::get('news', [GuestController::class,'news'])->name('news.index');
Route::get('login', [LoginController::class,'login'])->name('login');
Route::get('admin/dashboard', [GuestController::class,'dashboardAdmin'])->name('admin.dashboard');
Route::get('news/detail',[GuestController::class,'newsDetail'])->name('news.detail');
Route::resource('promo', PromoController::class);
Route::get('message', [MessageController::class,'index'])->name('message.index');
Route::post('message', [MessageController::class,'store'])->name('message.store');

