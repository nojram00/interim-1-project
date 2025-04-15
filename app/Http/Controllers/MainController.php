<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function book_table()
    {
        $books = \App\Models\Book::all();
        return view('pages.book-table', compact('books'));
    }

    public function author_table()
    {
        $authors = \App\Models\Author::all();
        return view('pages.author-table', compact('authors'));
    }

    public function publisher_table()
    {
        $publishers = \App\Models\Publisher::all();
        return view('pages.publisher-table' , compact('publishers'));
    }

    public function book_info(\App\Models\Book $book)
    {
        return view('pages.book-info', compact('book'));
    }

    public function author_info(\App\Models\Author $author)
    {
        return view('pages.author-info', compact('author'));
    }

    public function publisher_info(\App\Models\Publisher $publisher)
    {
        return view('pages.publisher-info', compact('publisher'));
    }
}
