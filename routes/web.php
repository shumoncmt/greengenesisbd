<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\projectcontroller;
use App\Http\Controllers\blogcontroller;


/// Web Routes Page
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/feature', [PageController::class, 'feature'])->name('feature');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/error', [PageController::class, 'error'])->name('error');

