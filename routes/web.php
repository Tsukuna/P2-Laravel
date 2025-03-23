<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('home',[PageController::class,'home']);
Route::get('service',[PageController::class,'service']);
