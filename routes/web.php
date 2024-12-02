<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::get('/', function () {
//    return view('index');  //merujuk ke file welcome.blade.php di folder resource/views
//});

Route::get('/welcome', function () {
    return view('welcome');  //merujuk ke file welcome.blade.php di folder resource/views
});

//Route::get('/login', function () {
//    return view('login');  //merujuk ke file welcome.blade.php di folder resource/views
//});

//Route::get('/about', function () {
//    return view('about');  //merujuk ke file welcome.blade.php di folder resource/views
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');