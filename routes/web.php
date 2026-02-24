<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\projectcontroller;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\CategoryController;


/// Web Routes Page
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/feature', [PageController::class, 'feature'])->name('feature');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/error', [PageController::class, 'error'])->name('error');


/// Web Routes category

Route::get('/blog', [CategoryController::class, 'blog'])->name('blog');
Route::get('/all-product', [CategoryController::class, 'allproduct'])->name('allproduct');
Route::get('/all-blog', [CategoryController::class, 'allblog'])->name('allblog');
Route::get('/all-project', [CategoryController::class, 'allproject'])->name('allproject');
Route::get('/industrial-solution', [CategoryController::class, 'industrialsolution'])->name('industrialsolution');