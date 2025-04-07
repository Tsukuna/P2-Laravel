<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('home',[PageController::class,'home'])->name('home');
Route::get('service',[PageController::class,'service'])->name('service');
Route::get('contact',[PageController::class,'contact'])->name('contact');
Route::get('about_us',[PageController::class,'about'])->name('about_us');
Route::get('feedback',[PageController::class,'feedback'])->name('feedback');

Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');
Route::post('feedback/store',[FeedbackController::class,'store'])->name('feedback.store');
