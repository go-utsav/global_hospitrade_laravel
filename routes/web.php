<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\frontendcontroller;

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

Route::get('/', [frontendController::class,'index'])->name('home');

Route::get('/login', [frontendController::class,'login'])->name('login');
Route::get('/sign-up', [frontendController::class,'signup'])->name('signup');

Route::get('/contact', [frontendController::class,'contact'])->name('contact');
Route::get('/about', [frontendController::class,'about'])->name('about');
Route::get('/product', [frontendController::class,'product'])->name('product');



Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
