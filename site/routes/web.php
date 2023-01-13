<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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
Route::middleware('setlocale:en')->name('en.')->group(function () {
    Route::get('/', [WebController::class, 'home'])->name('home');
    Route::get('/contact', [WebController::class, 'contact'])->name('contact');
    // Route::get('/', function () {
    //     return view('welcome');
    // });
});
Route::middleware('setlocale:es')->name('es.')->prefix('es')->group(function () {
    Route::get('/', [WebController::class, 'home'])->name('home');
    Route::get('/contacto', [WebController::class, 'contact'])->name('contact');
});
/*;*/
