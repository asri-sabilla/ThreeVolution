<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/program', function () {
    return view('program');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/cart', [CartController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});

//controller
Route::get('/', [App\Http\Controllers\Admin\PageController::class,'index']);
Route::get('/cart',[App\Http\Controllers\Admin\PageController::class,'tampil']);

//collection
Route::get('/collection',[CollectionController::class,'collection']);

//input data
Route::get('/insert', [CartController::class,'insert']);
//query builder
Route::get('/get', [CartController::class,'get']);

// -----------------------
//      AUTH USER
// -----------------------
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerProcess'])->name('register.process');

Route::get('/login', [UserController::class, 'loginForm'])->name('login.form');
Route::post('/login', [UserController::class, 'loginProcess'])->name('login.process');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
