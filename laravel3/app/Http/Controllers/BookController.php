<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('book.create');
    }

    public function store(Request $request){
        // $book = new Book();
        // $book->title = $request->title;
        // $book->autore = $request->autore;
        // $book->description = $request->description;
        // $book->save();

        $book = Book::create([
            'title' => $request->title,
            'autore' => $request->autore,
            'description' => $request->description,
        ]);

        return redirect(route('homepage'))->with('bookCreated', 'Hai inserito correttamente il tuo libro preferito!');
    }

    public function index(){
        $books = Book::all();

        return view('book.index', ['books' => $books]);
    }
}
