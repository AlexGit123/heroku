@extends('common.master')

@section('content')
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/') }}" class="text-sm text-gray-700 underline navbar-padding">Home</a>
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline navbar-padding">Dashboard</a>
                <a href="{{ url('/password-management') }}" class="text-sm text-gray-700 underline navbar-padding">Password
                    Management</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    @foreach($fooeys as $fooey)
        <div style="text-align: center; padding: 2%">
            <h1 style="font-weight:bold">
                <a href="{{ route('fooeys.show', $fooey) }}">{{ $fooey->title }}</a>
            </h1>
            <p>{{ $fooey->email }}</p>

            <a href="{{ route('fooeys.edit', $fooey) }}">
                <button style="background-color: darkblue; color: white" class="button">Edit</button>
            </a>
            <form method="POST" action="/fooeys/{{ $fooey->id }}">
                @csrf
                @method('DELETE')
                <div style="text-align: center">
                    <button class="button" style="background-color: red; color: white">Delete</button>
                </div>
            </form>
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
