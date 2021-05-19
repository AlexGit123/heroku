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

    <div>
        <div>
            <h1>Create a new fooey</h1>

            <form method="POST" action="/fooeys">
                @csrf

                <div>
                    <label class="field" for="">Fooey Title</label>

                    <div class="">
                        <input class="input @error('title') is-danger @enderror"
                               type="text"
                               name="title"
                               id="title"
                               value="{{old('title')}}">

                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>


                <div class="">
                    <label class="" for="excerpt">Fooey Excerpt</label>


                    <div class="field">
                    <textarea class="textarea @error('excerpt') is-danger @enderror"
                              name="excerpt"
                              id="excerpt"> {{old('excerpt')}} </textarea>

                        @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>

                </div>


                <div>
                    <label class="" for="body">Fooey Body</label>

                    <div>
                    <textarea class="textarea @error('body') is-danger @enderror"
                              name="body"
                              id="body"> {{old('body')}} </textarea>

                        @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>

                </div>


                <div class="">

                    <div>
                        <button class="button" style="background-color: lightblue;" type="submit">Submit</button>
                    </div>

                </div>

            </form>

        </div>
    </div>


