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
        return view('reader.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reader = Reader::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
        ]);

        if ($request->logo) {
            $reader->update([
                'logo' => $request->file('logo')->store('public/logos'),
            ]);
        }

        return redirect(route('reader.index'))->with('readerCreated', 'Hai correttamente inserito il tuo eBook!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function show(reader $reader)
    {
        return view('reader.show', compact('reader'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function edit(reader $reader)
    {
        return view('reader.edit', compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reader $reader)
    {
        $reader->upadate([
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
        ]);

        if($request->logo){
            $reader->update([
                'logo' => $request->file('logo')->store('public/logos'),
            ]);
        }

        return redirect(route('reader.index'))->with('readerUpdated', 'Hai modificato il tuo eBook');
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
