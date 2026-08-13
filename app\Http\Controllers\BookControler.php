<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $books = $query->get();
        $categories = Book::select('category')->distinct()->pluck('category');

        return view('books.index', compact('books', 'categories'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'year' => 'required|integer|min:0|max:' . (date('Y') + 1),
            'borrowed_to' => 'nullable|string|max:255',
            'return_due_date' => 'nullable|date|required_with:borrowed_to',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Livro cadastrado com sucesso!');
    }
}
