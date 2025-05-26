<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes for the main website pages.
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/projects', [PageController::class, 'projects'])->name('projects'); // This now points to projects.blade.php
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
