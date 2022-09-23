<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;

Route::controller(PageController::class)->group(function () {

    Route::get('/', 'home')->name('home');
    Route::get('/detail/{task:slug}', 'detail')->name('detail');
});

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('tasks', TaskController::class);

require __DIR__.'/auth.php';
