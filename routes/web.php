<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/landingpage', [PageController::class, 'index'])->name('index');
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/allbreeds', [PageController::class, 'allbreeds'])->name('allbreeds');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/signin', [PageController::class, 'signin'])->name('signin');
Route::get('/donation', [PageController::class, 'donation'])->name('donation');
Route::get('/Done', [PageController::class, 'Done'])->name('Done');



