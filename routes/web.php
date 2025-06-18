<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutfolioController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EcpayController;

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

/* 綠界介接 */
Route::prefix('ecpay')->group(function () {
    Route::get('/test', function () {
        return view('ecpay.test-form');
    })->name('ecpay.test');
    Route::post('/create-order', [EcpayController::class, 'createOrder'])->name('ecpay.create.order');
    Route::post('/notify', [EcpayController::class, 'notify'])->name('ecpay.notify');
    Route::get('/return', [EcpayController::class, 'returnPage'])->name('ecpay.return');
    Route::post('/client-notify', [EcpayController::class, 'clientNotify'])->name('ecpay.client.notify');
});