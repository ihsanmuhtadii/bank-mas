<?php

use App\Http\Controllers\PageController;
use App\Models\Page;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('page')->group(function () {
    Route::get('visit/{slug}', [PageController::class, 'visit'])->name('page.visit');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('page', PageController::class);
