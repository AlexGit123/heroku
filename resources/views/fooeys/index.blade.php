<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif

@foreach($fooeys as $fooey)

    <div style="text-align: center">
        <h1>
            <a href="{{ route('fooeys.show', $fooey) }}">
                {{$fooey->title}}
            </a>
        </h1>

        <p>{{$fooey->body}}</p>
    </div>
@endforeach

<div>
    <a href="{{route('fooeys.create', $fooey)}}">
        <button class="button is-large is-fullwidth" style="background-color: lightblue;" type="submit">Create a Fooey</button>
    </a>
</div>

