<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
})->name('home');


Route::controller(MainController::class)->group(function () {
    Route::get('/books', 'book_table')->name('books');
    Route::get('/authors', 'author_table')->name('authors');
    Route::get('/publishers', 'publisher_table')->name('publishers');

    Route::get('/book/{book}', 'book_info')->name('book');
    Route::get('/author/{author}', 'author_info')->name('author');
    Route::get('/publisher/{publisher}', 'publisher_info')->name('publisher');
});