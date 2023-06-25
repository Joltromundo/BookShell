<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Return all books
    */
    public function index()
    {
        $books = Book::all();

        return response()->json($books);
    }

    /**
     * Returnig the book by ID
    */
    public function show(string $id)
    {
        $book = Book::find($id);

        return response()->json($book);
    }
}
