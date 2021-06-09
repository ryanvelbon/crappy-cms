<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ProjectController;


Route::get('/', [PageController::class, 'home'])->name('home');


Route::get('/about', [PageController::class, 'about'])->name('about');
Route::resource('/services', ServiceController::class);
Route::resource('/careers', CareerController::class);
Route::resource('/projects', ProjectController::class);
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'postContact'])->name('postContact');



Route::get('/css-demo', function () {
    return view('css-demo');
});