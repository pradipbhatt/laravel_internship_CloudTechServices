<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Dynamic routes
Route::get('/project/{id}', [PageController::class, 'project'])->name('project');
Route::get('/user/{username}', [PageController::class, 'profile'])->name('profile');
