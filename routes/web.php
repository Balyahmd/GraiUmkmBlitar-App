<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductShow;
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




Route::get('/', function () {
    return view('beranda', ['Beranda' => 'Home']);
});


Route::resource('/', HomeController::class);

Route::resource('product', ProductShow::class);

Route::get('/search', [ProductShow::class, 'search'])->name('search');
