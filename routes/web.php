<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KPAstro;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });
 
Route::view('/home', 'home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact/{name}', function ($name) {
    echo $name;
    return view('about');
});

Route::get("/user/{name}", [UserController::class, 'username']);
Route::get("admin", [UserController::class, 'adminLogin']);

Route::prefix("kp-astro")->group(function () {
    Route::get("/", [KPAstro::class, 'index']);
    Route::get("/kundali", [KPAstro::class, 'kundali']);
});



