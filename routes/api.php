<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/get-all-blogs', 'App\Http\Controllers\BlogController@getAllBlogs');
});