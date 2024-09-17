<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

Route::get('/books', [BookController::class, "index"] );
Route::get('/books/create', [BookController::class, "create"])->name("books.create");
Route::post('/books' , [BookController::class, "store"])->name("books.store");
