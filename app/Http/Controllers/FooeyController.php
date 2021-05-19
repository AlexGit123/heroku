<?php

namespace App\Http\Controllers;

use App\Models\Fooey;
use Illuminate\Http\Request;

class FooeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fooeys = Fooey::take(3)->get();

        return view('fooeys.index', ['fooeys' => $fooeys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fooeys.create');
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
     * @param  \App\Models\Fooey  $fooey
     * @return \Illuminate\Http\Response
     */
    public function show(Fooey $fooey)
    {
        return view('fooeys.show', ['fooey' => $fooey]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fooey  $fooey
     * @return \Illuminate\Http\Response
     */
    public function edit(Fooey $fooey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fooey  $fooey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fooey $fooey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fooey  $fooey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fooey $fooey)
    {
        //
    }
}
