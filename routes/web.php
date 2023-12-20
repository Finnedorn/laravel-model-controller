<?php

use Illuminate\Support\Facades\Route;
//dichiariamo l'HomeController per utilizzarlo
use App\Http\Controllers\HomeController;
//dichiariamo il BookController per utilizzarlo
use App\Http\Controllers\BookController;
//dichiariamo il MovieController per utilizzarlo
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//reindizziamo la route generale al controller
Route::get('/', [HomeController::class,'home'])->name('home');

//Book routes

//creiamo una rotta books per visualizzare tutti gli elementi del db
Route::get('/books', [BookController::class,'index'])->name('books.index');

//creiamo una rotta che reindirizzi allo show a seconda dell'id inserito
Route::get('/books/{id}', [BookController::class,'show'])->name('books.show');

//Movie routes

//creiamo una rotta books per visualizzare tutti gli elementi del db
Route::get('/movies', [MovieController::class,'index'])->name('movies.index');

//creiamo una rotta che reindirizzi allo show a seconda dell'id inserito
Route::get('/movies/{id}', [MovieController::class,'show'])->name('movies.show');
