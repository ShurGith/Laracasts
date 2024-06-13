<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Requests\PostRequest;
Route::view('/','indice')->name('indice');
Route::view('blog','blog')->name('blog');
Route::view('contact','contact')->name('contact');
Route::view('about','about')->name('about');

Route::resource('posts',PostController::class);
