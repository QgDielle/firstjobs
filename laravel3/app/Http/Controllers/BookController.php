<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function create(){
        return view('book.create');
    }

    public function store(BookRequest $request){
        // $book = new Book();
        // $book->title = $request->title;
        // $book->autore = $request->autore;
        // $book->description = $request->description;
        // $book->save();

        if($request->cover){
        $book = Book::create([
            'title' => $request->title,
            'autore' => $request->autore,
            'description' => $request->description,
            'cover' => $request->file('cover')->store('/public/covers'),
        ]);
    }else{
        $book = Book::create([
        'title' => $request->title,
        'autore' => $request->autore,
        'description' => $request->description,
        ]);
    }
        return redirect(route('homepage'))->with('bookCreated', 'Hai inserito correttamente il tuo libro preferito!');
    }

    public function index(){
        $books = Book::all();

        return view('book.index', ['books' => $books]);

    }
}
