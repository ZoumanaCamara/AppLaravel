<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\RegisterController;

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


/*
|--------------------------------------------------------------------------
| Les Routes de l'inscription et de connexion
|--------------------------------------------------------------------------
*/
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout']);


/*
|--------------------------------------------------------------------------
| Les Routes des pages Accueil
|--------------------------------------------------------------------------
*/
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'pageGuest'])->name('index');

/*
|--------------------------------------------------------------------------
| Les Routes de la page de gestion de category
|--------------------------------------------------------------------------
*/
Route::resource('/categories', CategoryController::class)->except('show')->names('categories');
Route::get('/categories/{category}', [CategoryController::class, 'destroy']); 

/*
|--------------------------------------------------------------------------
| Les Routes de la page de gestion des article
|--------------------------------------------------------------------------
*/
Route::resource('/posts', Postcontroller::class)->except('show')->names('posts');
Route::get('/posts/{post}', [PostController::class, 'destroy']); 