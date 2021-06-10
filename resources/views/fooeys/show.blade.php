@extends('common.master')

@section('content')
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline navbar-padding">Dashboard</a>
                <a href="{{ url('/password-management') }}" class="text-sm text-gray-700 underline navbar-padding">Password Management</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="padding-card">
        <div class="card">
            <div class="card-content"
                 style="text-align: center; line-height: 3em; padding-left: 5%; padding-right: 5%; padding-bottom: 1%">
                <h1 class="show-card-header">Title</h1>
                <a href="/fooeys/{{ $fooey->id }}">
                    <h1>{{ $fooey->title }}</h1>
                </a>

                <div class="show-padding">
                    <h1 class="show-card-header">Fooey Excerpt</h1>
                    <p>{{ $fooey->excerpt }}</p>
                </div>

                <div class="show-padding">
                    <h1 class="show-card-header">Fooey Body</h1>
                    <p>{{ $fooey->body }}</p>
                </div>

                <div class="show-padding">
                    <h1 class="show-card-header">Email</h1>
                    <p>{{$fooey->email}}</p>
                </div>

                <div class="show-padding">
                    <h1 class="show-card-header">Link</h1>
                    <p>{{$fooey->link}}</p>
                </div>
            </div>

            <div>
                <a href="{{ route('fooeys.edit', $fooey) }}">
                    <button class="button is-large is-fullwidth" style="background-color: lightblue;">Edit</button>
                </a>
            </div>
            <div>
                <a href="{{ route('fooeys.index') }}">
                    <button class="button is-large is-fullwidth" style="background-color: lightblue;">Back</button>
                </a>
            </div>
        </div>
    </div>
@endsection
