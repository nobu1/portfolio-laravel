<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\IntroductionController;

// Main page(index.blade.php)
Route::get('/', function () {
    return view('index');
})->name('index');

// Post page
Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::get('post/search', [PostController::class, 'search'])->name('post.search');
Route::post('post/search', [PostController::class, 'find'])->name('post.find');
Route::get('post/create', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('post.create');
Route::post('post', [PostController::class, 'store'])->name('post.store');
Route::get('post/show/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('post/{post}', [PostController::class, 'update'])->middleware(['auth', 'verified'])->name('post.update');
Route::delete('post/{post}', [PostController::class, 'destroy'])->middleware(['auth', 'verified'])->name('post.destroy');

// Inquiry page
Route::get('inquiry', [InquiryController::class, 'index'])->name('inquiry.index');
Route::post('inquiry/confirm', [InquiryController::class, 'confirm'])->name('inquiry.confirm');
Route::get('inquiry/confirm', [InquiryController::class, 'redo'])->name('inquiry.redo');
Route::post('inquiry/contact', [InquiryController::class, 'store'])->name('inquiry.store');

// Introduction page
Route::get('introduction', [IntroductionController::class, 'index'])->name('introduction.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
