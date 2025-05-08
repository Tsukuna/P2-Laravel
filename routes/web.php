<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/',[PageController::class,'home'])->name('home');

// Static pages
Route::get('service',[PageController::class,'service'])->name('service');
Route::get('contact',[PageController::class,'contact'])->name('contact');
Route::get('about-us',[PageController::class,'about'])->name('about-us');
Route::get('feedback',[PageController::class,'feedback'])->name('feedback');

// Form submissions
Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');
Route::post('feedback/store',[FeedbackController::class,'store'])->name('feedback.store');
