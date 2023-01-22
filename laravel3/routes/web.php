<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/contattaci' , [PublicController::class, 'contact_us'])->name('contattaci');
Route::post('/contattaci/submit' , [PublicController::class, 'contact_submit'])->name('contattaci.submit');

Route::get('/book/create' , [BookController::class, 'create'])->name('book.create');
Route::post('/book/store' , [BookController::class, 'store'])->name('book.store');
Route::get('/book/index' , [BookController::class, 'index'])->name('book.index');