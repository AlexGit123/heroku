@extends('common.master')

@section('content')
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/') }}" class="text-sm text-gray-700 underline navbar-padding">Home</a>
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline navbar-padding">Dashboard</a>
                <a href="{{ url('/password-management') }}" class="text-sm text-gray-700 underline navbar-padding">Password
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
        <div>
            <h1 style="font-size: 110%; text-align: center">Create a new fooey</h1>
            <h2 style="color: red; padding-top: 2%; padding-left: 2%">* All fields are required</h2>
            <div>
                <form method="POST" action="/fooeys">
                    @csrf
                    <div style="padding-left: 2%; padding-right: 2%; padding-top: 1%">
                        <span style="color: red">*<label class="title" for="title">Fooey Title</label></span>
                        <div>
                            <input class="input @error('title') is-danger @enderror"
                                   type="text"
                                   name="title"
                                   id="title"
                                   value="{{ old('title') }}">
                            @error('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="input-field">
                        <label class="excerpt" for="excerpt"><span style="color: red">*</span>Fooey Excerpt</label>
                        <div class="field">
                        <textarea class="textarea @error('excerpt') is-danger @enderror"
                                  name="excerpt"
                                  id="excerpt"> {{ old('excerpt') }}</textarea>
                            @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="input-field">
                        <label class="body" for="body"><span style="color: red">*</span>Fooey Body</label>
                        <div>
                        <textarea class="textarea @error('body') is-danger @enderror"
                                  name="body"
                                  id="body"> {{ old('body') }}</textarea>
                            @error('body')
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="input-field">
                        <label class="field" for="email"><span style="color: red">*</span>Email</label>
                        <div>
                            <input class="input @error('email') is-danger @enderror"
                                   type="text"
                                   name="email"
                                   id="email"
                                   value="{{ old('email') }}"
                                   placeholder="Ex. johndoe@gmail.com">
                            @error('email')
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="input-field">
                        <label class="field" for="link"><span style="color: red">*</span>Link to Your Favorite
                            Website</label>
                        <div>
                            <input class="input @error('link') is-danger @enderror"
                                   type="text"
                                   name="link"
                                   id="link"
                                   value="{{ old('link') }}"
                                   placeholder="URL must start with https://">
                            @error('link')
                            <p class="help is-danger">{{ $errors->first('link') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="button-padding" style="display: flex; justify-content: center">
                        <div>
                            <div>
                                <button class="button" style="background-color: lightblue;" type="submit">Submit
                                </button>
                            </div>
                        </div>

                        <div style="text-align: center">
                            <div>
                                <a href="{{ route('fooeys.index') }}" class="button"
                                   style="background-color: lightblue">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
