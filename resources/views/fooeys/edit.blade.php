<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
<link rel="stylesheet" href="/public/css/style.css">

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a style="padding: 2%" href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            <a style="padding: 2%" href="{{ url('/password-management') }}" class="text-sm text-gray-700 underline">Password
                Management</a>

        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif

<div>
    <h1 style="text-align: center">Update a Fooey</h1>
    <h2 style="color: red; padding-left: 1%">Fields with an * are required</h2>

    <div style="text-align: center">
        <form method="POST" action="{{ route('fooeys.update', $fooey->id) }}">
            @csrf
            @method('PUT')
            <div style="padding-left: 2%; padding-right: 2%; padding-top: 1%">
                <label class="title" for="title"><span style="color: red">*</span>Fooey Title</label>

                <div>
                    <input class="input @error('title') is-danger @enderror"
                           type="text"
                           name="title"
                           id="title"
                           value="{{$fooey->title}}">

                    @error('title')
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                    @enderror
                </div>
            </div>

            <div style="padding-left: 2%; padding-right: 2%; padding-top: 3%">
                <label for="excerpt"><span style="color: red">*</span>Fooey Excerpt</label>
                <div>
                        <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt"
                                  id="excerpt">{{$fooey->excerpt}}</textarea>
                    @error('excerpt')
                    <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                    @enderror
                </div>
            </div>

            <div style="padding-left: 2%; padding-right: 2%; padding-top: 3%">
                <label class="body" for="body"><span style="color: red">*</span>Fooey Body</label>
                <div>
                    <textarea class="textarea @error('body') is-danger @enderror" name="body"
                              id="body">{{$fooey->body}}</textarea>
                    @error('excerpt')
                    <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                    @enderror
                </div>
            </div>

            <div style="padding-left: 2%; padding-right: 2%; padding-top: 3%">
                <label class="email" for="email"><span style="color: red">*</span>Email</label>

                <div>
                    <input class="input @error('email') is-danger @enderror"
                           type="text"
                           name="email"
                           id="email"
                           value="{{$fooey->email}}">

                    @error('title')
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                    @enderror
                </div>
            </div>

            <div style="display: inline-block; padding-top: .4%; justify-content: center">
                <button type="submit" class="button is-medium" style="background-color: lightblue">Save</button>
            </div>

            <div style="display: inline-block">
                <a href="{{route('fooeys.index')}}" class="button is-medium"
                   style="background-color: lightblue">Cancel</a>
            </div>

        </form>
    </div>


</div>
</div>
