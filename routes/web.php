<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class,'index']);
Route::post('/upload-file',[ImageController::class,'handleImage'])->name('upload-file');

Route::get('contact', function () {
    return "<h1>Contact Page</h1>";
});
// Route Params
Route::get('contact/{id}', function ($id) {
    return $id;
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class,'handleLogin'])->name('login.submit');
