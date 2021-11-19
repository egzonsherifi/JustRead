<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index', [
            'books' => Book::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(7)->withQueryString()
        ]);
    }

    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }
}
