 @foreach($fooeys as $fooey)

        <div>
            <h1>
                <a href="{{ route('fooeys.show', $fooey) }}">
                    {{$fooey->title}}
                </a>

            </h1>

            <p>{{$fooey->body}}</p>

        </div>
    @endforeach

