<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BookController::class, 'index'])->name('home');

Route::get('books/{book:slug}', [BookController::class, 'show']);

Route::get('authors/{author:username}', function (User $author) {
    return view('books', [
        'books' => $author->books
    ]);
});
