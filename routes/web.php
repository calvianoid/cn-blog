<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

// Menampilkan Halaman All Post
Route::get('/posts', [PostController::class, 'index']);

// Menampilkan Halaman Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Menampilkan Halaman Categories
Route::get('/categories', [CategoryController::class, 'index']);

// Menampilkan Halaman Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

// Authenticate Login
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

// Menampilkan Halaman Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

// Menyimpan Data Register
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');