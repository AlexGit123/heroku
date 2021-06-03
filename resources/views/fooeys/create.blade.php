<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a style="padding: 2%" href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            <a style="padding: 2%" href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
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

        <div style="text-align: center">
            <form method="POST" action="/fooeys">
                @csrf

                <div style="padding-left: 2%; padding-right: 2%">
                    <label class="title" for="title"><span style="color: red">*</span>Fooey Title</label>

                    <div>
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


                <div style="padding-left: 2%; padding-right: 2%; padding-top: 3%">
                    <label class="excerpt" for="excerpt"><span style="color: red">*</span>Fooey Excerpt</label>
                    <div class="field">
                    <textarea class="textarea @error('excerpt') is-danger @enderror"
                              name="excerpt"
                              id="excerpt"> {{old('excerpt')}} </textarea>

                        @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>

                <div style=" padding-left: 2%; padding-right: 2%; padding-top: 3%;">
                    <label class="body" for="body"><span style="color: red">*</span>Fooey Body</label>

                    <div>
                    <textarea class="textarea @error('body') is-danger @enderror"
                              name="body"
                              id="body"> {{old('body')}} </textarea>

                        @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>

                <div style="padding-left: 2%; padding-right: 2%; padding-top: 3%">
                    <label class="field" for="email"><span style="color: red">*</span>Email</label>

                    <div>
                        <input class="input @error('email') is-danger @enderror"
                               type="text"
                               name="email"
                               id="email"
                               value="{{old('email')}}">

                        @error('email')
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div style="padding-top: 3%;">
                        <button class="button" style="background-color: lightblue;" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

