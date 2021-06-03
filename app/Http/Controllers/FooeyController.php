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
        $fooeys = Fooey::take(10)->get();

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
        Fooey::create($this->validateFooey($request));

        return redirect(route('fooeys.index'));
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
        return view('fooeys.edit', ['fooey' => $fooey]);
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
        $fooey->update($this->validateFooey($request));

        return redirect(route('fooeys.show', $fooey));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fooey  $fooey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fooey $fooey)
    {

        $fooey = Fooey::find($fooey->id);

        $fooey->delete();

        return redirect(route('fooeys.index', $fooey));
    }

    public function validateFooey(Request $request)
    {
        return $request->validate([
            'title' => 'required|max:50',
            'excerpt' => 'required|min:50|max:200',
            'body' => 'required|min:25|max:350',
            'email' => 'required|email'
        ]);
    }
}
