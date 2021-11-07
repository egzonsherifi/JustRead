<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        return view('books', [
            'books' => Book::latest()->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Book $book)
    {
        return view('book', [
            'book' => $book
        ]);
    }
}
