<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        return view("books.index", ["books" => Book::all()]);
    }

    public function create(){
        return view("books.create");
    }

    public function store(Request $request){
        $request->validate([
            "title" => "required",
            "author" => "required",
            "pages" => "required|integer"
        ]);

        Book::create($request->all());
        
        return redirect("/books");
    }
}
