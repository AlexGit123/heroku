<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

<div>
    <div style="text-align: center; line-height: 3em; padding-left: 20px; padding-right: 20px; padding-bottom: 20px">

        <a href="/fooeys/{{ $fooey->id }}">
            <h1>{{ $fooey->title }}</h1>
        </a>

        <p>{{ $fooey->excerpt }}</p>

        <p>{{ $fooey->body }}</p>

        <p>{{$fooey->email}}</p>

    </div>

    <div>
        <a href="{{ route('fooeys.index') }}">
            <button class="button is-large is-fullwidth" style="background-color: lightblue;">Back</button>
        </a>
    </div>
</div>
