<?php

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
Route::get('/', function () { return view('home'); });
Route::get('en/header-menu', [HomeController::class, 'HomePage'])->name('header-menu');
Route::get('ar/header-menu', [HomeController::class, 'HomePage'])->name('header-menu');
//Route::get('en/header-menu', function () { return view('restaurant.header-menu'); });
//Route::get('ar/header-menu', function () { return view('restaurant.header-menu'); });

