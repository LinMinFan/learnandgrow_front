<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutfolioController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

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
Route::get('/about', [AboutfolioController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'create'])->name('create.contact');
Route::get('/portfolio-list', [PortfolioController::class, 'portfolioList'])->name('portfolio-list');
Route::get('/portfolio/{name}', [PortfolioController::class, 'portfolioShow'])->name('portfolio-show');
Route::get('/post-list', [HomeController::class, 'show'])->name('post-list');
Route::get('/post/{id}', [HomeController::class, 'show'])->name('post-show');