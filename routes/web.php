<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'postContact'])->name('postContact');



Route::get('/css-demo', function () {
    return view('css-demo');
});