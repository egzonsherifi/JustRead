<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Validation\Rule;

class AdminBookController extends Controller
{
    public function index()
    {
        return view('admin.books.index', [
            'books' => Book::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.books.create');
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

    public function edit(Book $book)
    {
        return view('admin.books.edit', ['book' => $book]);
    }

    public function update(Book $book)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('books', 'slug')->ignore($book->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $book->update($attributes);

        return back()->with('success', 'Book Updated!');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return back()->with('success', 'Book Deleted!');
    }
}
