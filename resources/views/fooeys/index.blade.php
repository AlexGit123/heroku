@extends('common.master')

@section('content')
    @foreach($fooeys as $fooey)
        <div style="text-align: center; padding: 2%">
            <h1 style="font-weight:bold">
                <a href="{{ route('fooeys.show', $fooey) }}">{{ $fooey->title }}</a>
            </h1>
            <p>{{ $fooey->email }}</p>

            <a href="{{ route('fooeys.edit', $fooey) }}">
                <button style="background-color: darkblue; color: white" class="button">Edit</button>
            </a>

            @can('delete-fooey', $fooey)
                <form method="POST" action="/fooeys/{{ $fooey->id }}">
                    @csrf
                    @method('DELETE')
                    <div style="text-align: center">
                        <button class="button" style="background-color: red; color: white">Delete</button>
                    </div>
                </form>
            @endcan
        </div>
    @endforeach
    <div style="padding-top: 15%">
        <a href="{{ route('fooeys.create') }}">
            <button class="button is-large is-fullwidth" style="background-color: lightblue;" type="submit">Create a
                Fooey
            </button>
        </a>
    </div>
@endsection
