<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pokedex' , function (){
    $student = "Giangabriele";
    $username = "Qg";
    return view('pokedex' , ['student'=>$student , 'username'=>$username]) ;
});
Route::get('/vehicle', function (){
    $student = "Giangabriele";
    $vehicles = [
        ['name'=>'BMW' , 'model'=>'420d'],
        ['name'=>'Audi' , 'model'=>'Q4'],
        ['name'=>'Fiat' , 'model'=>'500'],
        ['name'=>'Toyota' , 'model'=>'Rav4'],
        ['name'=>'Porsche' , 'model'=>'992gts']
    ];
    return view('vehicle' , ['student'=>$student , 'vehicle'=>$vehicles]) ;
});