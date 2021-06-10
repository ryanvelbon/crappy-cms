<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ProjectController;


Route::get('/', [PageController::class, 'home'])->name('home');


Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'postContact'])->name('postContact');


Route::resource('/services', ServiceController::class)->only(['index', 'show']);
Route::resource('/careers', CareerController::class)->only(['index', 'show']);
Route::resource('/projects', ProjectController::class)->only(['index', 'show']);

Route::prefix('admin')->name('admin.')->group(function () {
	Route::resource('/services', ServiceController::class)->except(['index', 'show']);
	Route::resource('/careers', CareerController::class)->except(['index', 'show']);
	Route::resource('/projects', ProjectController::class)->except(['index', 'show']);
});






Route::get('/css-demo', function () {
	return view('css-demo');
});