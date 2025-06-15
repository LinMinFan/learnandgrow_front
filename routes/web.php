<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/portfolio-list', [HomeController::class, 'list'])->name('portfolio-list');
Route::get('/portfolio/{name}', [HomeController::class, 'show'])->name('portfolio-show');
Route::get('/post-list', [HomeController::class, 'show'])->name('post-list');
Route::get('/post/{id}', [HomeController::class, 'show'])->name('post-show');