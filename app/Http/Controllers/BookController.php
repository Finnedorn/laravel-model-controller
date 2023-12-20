<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//mi collego alla tabella books in models Book.php
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        //uso il metodo all per prendere tutti i dati della tabella
        $books = Book::all();

        //come in mysql where ci permette di filtrare gli elementi in tabella per parametro
        //la query è così impostata: il primo parametro è la key,il secondo (facoltativo) è un eventuale secondo filtro
        //il terzo è il contenuto da filtrare
        //seleziona tutti gli elementi che hanno un titolo che finisca per 'la ragazza della neve'
        // $books = Book::where('title','like', '%la ragazza della neve')->get();

        //seleziona tutti gli elementi il cui titolo è la ragazza della neve e ordinameli per titolo in ordine discendente!
        // $books = Book::where('title','la ragazza della neve')->orderBy('title', 'desc')->get();


        return view("books.index", compact("books"));
    }

    public function show($id) {
        //il metodo find or fail mi permette di trovare il modello che matcha la mia key, se però questo non c'è
        //mi rimanda ad un model 404
        $book = Book::findorfail($id);
        return view("books.show", compact("book"));
    }
}
