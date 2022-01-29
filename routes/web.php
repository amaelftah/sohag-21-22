<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    $name = 'mohamed';
    $age = 25;
    return view('hello',[
        'name' => $name,
    ]);
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts',[PostController::class, 'store'])->name('posts.store');
