<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'get'])->name('home');
Route::get('/post/{id}', [HomeController::class,'singlepost'])->name('single_post');

Route::get('/post',[PostController::class,'index'])->middleware(['auth'])->name('post_index');
Route::post('/post',[PostController::class,'create'])->middleware(['auth'])->name('post_create');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->middleware(['auth'])->name('post_edit');
Route::put('/post/edit/{id}',[PostController::class,'update'])->middleware(['auth'])->name('post_update');
Route::get('/post/delete/{id}',[PostController::class,'destroy'])->middleware(['auth'])->name('post_delete');


Route::get('/dashboard', [DashboardController::class,'showPost'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';