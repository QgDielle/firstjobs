<?php

use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\StoreController;
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

Route::get('/marchi' , [BrandController::class, 'brand_index'])-> name('marchi');
Route::get('/dettaglio/{id}', [BrandController::class, 'brand_show'])-> name('dettaglio');

Route::get('/stores' , [StoreController::class, 'store_index'])->name('stores');
Route::get('/store/dettaglio/{id}' , [StoreController::class, 'store_show'])->name('store.dettaglio');
