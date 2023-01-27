<?php

namespace App\Http\Controllers;

use App\Models\reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readers = Reader::all();

        return view('reader.index', compact('readers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function show(reader $reader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function edit(reader $reader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reader $reader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function destroy(reader $reader)
    {
        //
    }
}
