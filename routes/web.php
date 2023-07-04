<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::post('/change/locale/{locale}', [HomeController::class, 'changeLocale'])->name('changeLocale');

Route::get('/', [HomeController::class, 'home'])->name('home');

// Route::middleware('auth')->group(function () {

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'home'])->name('home');
});

// });

Route::fallback(function () {
    return redirect(route('home'));
});