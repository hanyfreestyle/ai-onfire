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
Route::get('en/header-menu', [HomeController::class, 'HomePage'])->name('home_ar');
Route::get('ar/header-menu', [HomeController::class, 'HomePage'])->name('home_en');


// web.php
Route::get('/toggle-theme', function () {
    $theme = session('theme', 'light'); // الوضع الافتراضي هو الفاتح
    $newTheme = $theme === 'light' ? 'dark' : 'light';
    session(['theme' => $newTheme]);
    return redirect()->back(); // إعادة التوجيه إلى الصفحة السابقة
})->name('toggle-theme');


//Route::get('en/header-menu', function () { return view('restaurant.header-menu'); });
//Route::get('ar/header-menu', function () { return view('restaurant.header-menu'); });

