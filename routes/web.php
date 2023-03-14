<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

Route::get('/', function () {
    $comics = config('comics');
    return view('welcome', compact('comics'));
});
