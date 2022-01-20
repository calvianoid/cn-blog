<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminCategoryController;
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
// Menampilkan Halaman Home
Route::get('/', function(){
    return view('home', [
        "active" => "home",
        "title" => "Home"
    ]);
});

// Menampilkan Halaman About
Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Calviano Nathanel",
        "email" => "calvianoid@gmail.com",
        "image" => "logo.png"
    ]);
});

// Menampilkan Halaman Dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/posts', [PostController::class, 'index']); // Menampilkan Halaman All Post
Route::get('posts/{post:slug}', [PostController::class, 'show']); // Menampilkan Halaman Single Post

Route::get('/categories', [CategoryController::class, 'index']); // Menampilkan Halaman Categories

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login'); // Menampilkan Halaman Login
Route::post('/login', [LoginController::class, 'authenticate']); // Authenticate Login
Route::post('/logout', [LoginController::class, 'logout']); //Logout

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest'); // Menampilkan Halaman Register
Route::post('/register', [RegisterController::class, 'store']); // Menyimpan Data Register

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth'); //Store, Show, Edit, Update, Destroy My Post

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');