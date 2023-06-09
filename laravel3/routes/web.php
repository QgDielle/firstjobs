<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReaderController;

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
Route::get('/book/show/{book}', [BookController::class, 'show'])->name('book.show');

Route::get('/reader/index', [ReaderController::class, 'index'])->name('reader.index');
Route::get('/reader/create', [ReaderController::class, 'create'])->name('reader.create');
Route::post('/reader.store', [ReaderController::class, 'store'])->name('reader.store');
Route::get('/reader/show/{reader}', [ReaderController::class, 'show'])->name('reader.show');
Route::get('/reader/edit/{reader}', [ReaderController::class, 'edit'])->name('reader.edit');
Route::put('/reader/update/{reader}', [ReaderController::class, 'edit'])->name('reader.upadate');