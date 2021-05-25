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
            <h1 style="font-size: 110%; text-align: center">Create a new fooey</h1>
            <h2 style="color: red; padding-top: 2%; padding-left: 1%">Fields with an * are required</h2>

            <form method="POST" action="/fooeys">
                @csrf

                <div style="padding-left: 1%">
                    <label class="field" for="">Fooey Title</label>

                    <div style="padding-right: 50%">
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


                <div style="padding-left: 1%; padding-top: 5%" class="">
                    <label class="" for="excerpt">Fooey Excerpt</label>


                    <div style="padding-right: 50%" class="field">
                    <textarea class="textarea @error('excerpt') is-danger @enderror"
                              name="excerpt"
                              id="excerpt"> {{old('excerpt')}} </textarea>

                        @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>

                </div>


                <div style="padding-top: 5%; padding-left: 1%">
                    <label class="" for="body">Fooey Body</label>

                    <div style="padding-right: 50%">
                    <textarea class="textarea @error('body') is-danger @enderror"
                              name="body"
                              id="body"> {{old('body')}} </textarea>

                        @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
                    </div>

                </div>


                <div class="">
                    <div style="padding-top: 5%; padding-left: 5%">
                        <button class="button" style="background-color: lightblue;" type="submit">Submit</button>
                    </div>
                </div>

            </form>

        </div>
    </div>


