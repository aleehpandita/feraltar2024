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
    Route::post('/send-contact', [WebController::class, 'sendContact'])->name('sendContact');
    Route::get('/about', [WebController::class, 'about'])->name('about');
    Route::get('/services', [WebController::class, 'services'])->name('services');
    Route::get('/fleet', [WebController::class, 'fleet'])->name('fleet');
    Route::get('destinations/{slug}', [WebController::class, '{slug}'])->name('{slug}');
    Route::get('/destinations/{slug}', 
    [WebController::class, '{slug}'])->name('monterrey');
    // Route::get('/cdmx', [WebController::class, 'cdmx'])->name('cdmx');
    // Route::get('/guadalajara', [WebController::class, 'guadalajara'])->name('guadalajara');
    // Route::get('/monterrey', [WebController::class, 'monterrey'])->name('monterrey');
    // Route::get('/loscabos', [WebController::class, 'loscabos'])->name('loscabos');
    // Route::get('/cancun', [WebController::class, 'cancun'])->name('cancun');
    // Route::get('/puertovallarta', [WebController::class, 'puertovallarta'])->name('puertovallarta');
    // Route::get('/tijuana', [WebController::class, 'tijuana'])->name('tijuana');
    // Route::get('/sanmiguel', [WebController::class, 'sanmiguel'])->name('sanmiguel');

    // Route::get('/', function () {
    //     return view('welcome');
    // });
});
Route::middleware('setlocale:es')->name('es.')->prefix('es')->group(function () {
    Route::get('/', [WebController::class, 'home'])->name('home');
    Route::get('/contacto', [WebController::class, 'contact'])->name('contact');
    Route::get('/nosotros', [WebController::class, 'about'])->name('about');
    Route::post('/send-contact', [WebController::class, 'sendContact'])->name('sendContact');
    Route::get('/servicios', [WebController::class, 'services'])->name('services');
    Route::get('/flotilla', [WebController::class, 'fleet'])->name('fleet');
    Route::get('/cdmx', [WebController::class, 'cdmx'])->name('cdmx');
    Route::get('/guadalajara', [WebController::class, 'guadalajara'])->name('guadalajara');
    Route::get('/monterrey', [WebController::class, 'monterrey'])->name('monterrey');
    Route::get('/loscaboss', [WebController::class, 'loscabos'])->name('loscabos');
    Route::get('/cancun', [WebController::class, 'cancun'])->name('cancun');
    Route::get('/puertovallarta', [WebController::class, 'puertovallarta'])->name('puertovallarta');
    Route::get('/tijuana', [WebController::class, 'tijuana'])->name('tijuana');
    Route::get('/sanmiguel', [WebController::class, 'sanmiguel'])->name('sanmiguel');
});
/*;*/
