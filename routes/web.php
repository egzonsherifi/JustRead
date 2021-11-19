<?php

use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\BookCommentsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('books/{book:slug}', [BookController::class, 'show']);

Route::post('newsletter', NewsletterController::class);

Route::post('books/{book:slug}/comments', [BookCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


// Admin Section
Route::middleware('can:admin')->group(function () {
    Route::resource('admin/books', AdminBookController::class)->except('show');

    // Route::get('admin/books', [AdminBookController::class, 'index']);
    // Route::post('admin/books', [AdminBookController::class, 'store']);
    // Route::get('admin/books/create', [AdminBookController::class, 'create']);
    // Route::get('admin/books/{book}/edit', [AdminBookController::class, 'edit']);
    // Route::patch('admin/books/{book}', [AdminBookController::class, 'update']);
    // Route::delete('admin/books/{book}', [AdminBookController::class, 'destroy']);
});
