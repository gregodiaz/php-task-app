<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;

Route::controller(PageController::class)->group(function () {

    Route::get('/', 'home')->name('home');
    Route::get('/detail/{task:slug}', 'detail')->name('detail');
});

Route::get('/tasks', function () {

    return view('tasks.index');
})->middleware(['auth'])->name('tasks.index');

Route::resource('tasks', TaskController::class);

require __DIR__ . '/auth.php';
