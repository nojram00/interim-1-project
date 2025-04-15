<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Author::truncate();
        Book::truncate();
        Publisher::truncate();

        $publishers = [
            ['name' => 'Penguin Random House', 'address' => 'New York, USA', 'details' => 'One of the largest publishers in the world.'],
            ['name' => 'HarperCollins', 'address' => 'New York, USA', 'details' => 'A major publisher of books and e-books.'],
            ['name' => 'Simon & Schuster', 'address' => 'New York, USA', 'details' => 'Publishes a wide range of books.'],
        ];
        foreach ($publishers as $publisher) {
            Publisher::create($publisher);
        }

        // Insert well-known authors
        $authors = [
            ['name' => 'J.K. Rowling', 'age' => 57, 'address' => 'Edinburgh, Scotland', 'details' => 'Author of the Harry Potter series.'],
            ['name' => 'George R.R. Martin', 'age' => 74, 'address' => 'Bayonne, New Jersey, USA', 'details' => 'Author of A Song of Ice and Fire.'],
            ['name' => 'J.R.R. Tolkien', 'age' => 81, 'address' => 'Bournemouth, England', 'details' => 'Author of The Lord of the Rings.'],
        ];
        foreach ($authors as $author) {
            Author::create($author);
        }

        // Insert well-known books
        $books = [
            ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'author' => 'J.K. Rowling', 'year_published' => 1997, 'details' => 'The first book in the Harry Potter series.'],
            ['title' => 'A Game of Thrones', 'author' => 'George R.R. Martin', 'year_published' => 1996, 'details' => 'The first book in A Song of Ice and Fire series.'],
            ['title' => 'The Fellowship of the Ring', 'author' => 'J.R.R. Tolkien', 'year_published' => 1954, 'details' => 'The first book in The Lord of the Rings trilogy.'],
        ];
        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
