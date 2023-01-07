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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/marchi' , function(){
    $watches = [
        [
            'id' => 1,
            'marca' => 'Vacheron Constantin' ,
            'modello' => 'Patrimony' ,
            'price' => '€ 55.000',
            'img' => 'https://www.vacheron-constantin.com/dam/rcq/vac/16/19/63/0/1619630.png.transform.vacproddetails.png'
        ],
        [
            'id' => 2,
            'marca' => 'Rolex' ,
            'modello' => 'Daytona' ,
            'price' => '€ 62.300',
            'img' => 'https://cdn-images.farfetch-contents.com/19/09/96/32/19099632_42528800_1000.jpg'
        ],
        [
            'id' => 3,
            'marca' => 'Panerai' ,
            'modello' => 'Luminor Perpetual Goldtech' ,
            'price' => '€ 50.000',
            'img' => 'https://www.panerai.com/content/dam/rcq/pan/21/48/57/8/2148578.png.transform.global_square_image_500_2x.png'
        ],
        [
            'id' => 4,
            'marca' => 'Cartier' ,
            'modello' => 'Balon Bleu oro rosa' ,
            'price' => '€ 42.300',
            'img' => 'https://www.astrua.com/images/thumbs/0043082_orologio-ballon-bleu-de-cartier-36-mm-oro-rosa-diamanti-ref-wjbb0037.jpeg'
        ],

    ];
    return view('marchi' , ['watches' => $watches]);
})-> name('marchi');
