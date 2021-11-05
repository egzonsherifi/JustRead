<?php

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

Route::get('/', function () {
    return view('books', [
        'books' => Book::latest()->get(),
        'categories' => Category::all()
    ]);
})->name('home');

Route::get('books/{book:slug}', function (Book $book) {
    return view('book', [
        'book' => $book
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('books', [
        'books' => $category->books,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');

Route::get('authors/{author:username}', function (User $author) {
    return view('books', [
        'books' => $author->books,
        'categories' => Category::all()
    ]);
});
