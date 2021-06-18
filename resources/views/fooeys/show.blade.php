@extends('common.master')

@section('content')
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
