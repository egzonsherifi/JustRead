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

    public function create()
    {
        return view('books.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('books', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Book::create($attributes);

        return redirect('/');
    }
}
