<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TaskController::class, 'index'])->name('tasksIndex');

Route::get('/task/{id}', [TaskController::class, 'show'])->name('taskShow');

Route::post('/store', [TaskController::class, 'store'])->name('taskStore');
