<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', HomeController::class);
// Route::post('/upload-file',[ImageController::class,'handleImage'])->name('upload-file');

// Route::get('success',function(){
//     return '<h1>Success Uploaded</h1>';
// })->name('success');

// Route::get('contact', function () {
//     return "<h1>Contact Page</h1>";
// });

// ROute::get('download',[ImageController::class,'download'])->name('download');
// // Route Params
// Route::get('contact/{id}', function ($id) {
//     return $id;
// });

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login',[LoginController::class,'handleLogin'])->name('login.submit');


Route::get('/posts/trash',[PostController::class,'trashed'])->name('posts.trashed'); // This have to be declared before resource
Route::get('/posts/{id}/restore',[PostController::class,'restore'])->name('posts.restore');
Route::delete('/posts/{id}/force-delete',[PostController::class,'forceDelete'])->name('posts.force_delete');
Route::resource('posts',PostController::class);

