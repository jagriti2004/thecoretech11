<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'profile'])->name('profile');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/service',[HomeController::class,'service'])->name('service');


