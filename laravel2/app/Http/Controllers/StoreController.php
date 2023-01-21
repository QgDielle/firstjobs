<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store_index(){
        $stores = [
            ['id' => 1, 'city' => 'Trieste'],
            ['id' => 2, 'city' => 'Modena'],
            ['id' => 3, 'city' => 'Bologna'],
            ['id' => 4, 'city' => 'Leuca'],
        ];

        return view('stores', ['stores' => $stores]);
    }
    public function store_show($id){
        $stores = [
            ['id' => 1, 'city' => 'Trieste', 'street' => 'Corso Italia', 'number' => '10'],
            ['id' => 2, 'city' => 'Modena', 'street' => 'Viale Liberta', 'number' => '8'],
            ['id' => 3, 'city' => 'Bologna', 'street' => 'Via Irnerio', 'number' => '16'],
            ['id' => 4, 'city' => 'Santa Maria di Leuca', 'street' => 'Via Marco Polo', 'number' => '40'],
        ];

        foreach ($stores as $store) {
            if($id == $store['id']) {
                return view('dettaglio-store', ['store' => $store]);
            }
        }
    }
}