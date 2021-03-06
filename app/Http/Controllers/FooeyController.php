<?php

namespace App\Http\Controllers;

use App\Models\Fooey;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

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
     * @param \Illuminate\Http\Request $request
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
     * @param \App\Models\Fooey $fooey
     * @return \Illuminate\Http\Response
     */
    public function show(Fooey $fooey)
    {
        return view('fooeys.show', ['fooey' => $fooey]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Fooey $fooey
     * @return \Illuminate\Http\Response
     */
    public function edit(Fooey $fooey)
    {
        return view('fooeys.edit', ['fooey' => $fooey]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fooey $fooey
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
     * @param \App\Models\Fooey $fooey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fooey $fooey)
    {
        $this->authorize('destroy');

        $fooey = Fooey::find($fooey->id);

        $fooey->delete();

        return redirect(route('fooeys.index', $fooey));
    }

    public function validateFooey($request)
    {
        return $request->validate([
            'user_id' => 'nullable | integer',
            'title' => 'required|min:10|max:50',
            'excerpt' => 'required|min:15|max:500',
            'body' => 'required|min:25|max:2500',
            'email' => 'required|email',
            'link' => 'required|url'
        ]);
    }
}
