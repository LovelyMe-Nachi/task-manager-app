<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::view('/', 'home');


Route::controller(TaskController::class)
->prefix('tasks')
->name('tasks.')
->group(function(){
    
    Route::get('/', 'index')->name('index');

    Route::get('/create', 'create')->name('create');

    Route::post('/store', 'store')->name('store');

    Route::get('/{task}', 'show')->name('show');

    Route::get('/{task}/edit', 'edit')->name('edit');

    Route::patch('/{task}', 'update')->name('update');

    Route::delete('/{task}', 'destroy')->name('destroy');
});