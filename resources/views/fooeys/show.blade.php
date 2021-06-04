<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
<div>
    <div style="text-align: center; line-height: 3em; padding-left: 5%; padding-right: 5%; padding-bottom: 1%">

        <h1 style="font-weight: bold; font-size: 120%">Title</h1>
        <a href="/fooeys/{{ $fooey->id }}">
            <h1>{{ $fooey->title }}</h1>
        </a>

        <div style="padding-top: 3%">
            <h1 style="font-weight: bold; font-size: 120%">Fooey Excerpt</h1>
            <p >{{ $fooey->excerpt }}</p>
        </div>

        <div style="padding-top: 3%">
            <h1 style="font-weight: bold; font-size: 120%">Fooey Body</h1>
            <p>{{ $fooey->body }}</p>
        </div>

        <div style="padding-top: 3%">
            <h1 style="font-weight: bold; font-size: 120%">Email</h1>
            <p>{{$fooey->email}}</p>
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
