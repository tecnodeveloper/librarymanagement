<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;


Route::get('/',function(){
    return view('dashboard');
})->name('home');
// Route::get('/', function () {
//     return Inertia::render('dashboard');
// })