@extends('common.master')

@section('content')
    <div>
        <h1 style="text-align: center">Update a Fooey</h1>
        <h2 style="color: red; padding-left: 2%">* All fields are required</h2>
        <div>
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
                               value="{{ $fooey->title }}">
                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="input-field">
                    <label for="excerpt"><span style="color: red">*</span>Fooey Excerpt</label>
                    <div>
                        <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt"
                                  id="excerpt">{{ $fooey->excerpt }}</textarea>
                        @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="input-field">
                    <label class="body" for="body"><span style="color: red">*</span>Fooey Body</label>
                    <div>
                    <textarea class="textarea @error('body') is-danger @enderror" name="body"
                              id="body">{{ $fooey->body }}</textarea>
                        @error('excerpt')
                        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="input-field">
                    <label class="email" for="email"><span style="color: red">*</span>Email</label>
                    <div>
                        <input class="input @error('email') is-danger @enderror"
                               type="text"
                               name="email"
                               id="email"
                               value="{{ $fooey->email }}">
                        @error('title')
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
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
                               value="{{ $fooey->link }}"
                               placeholder="URL must start with https://">
                        @error('link')
                        <p class="help is-danger">{{ $errors->first('link') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="button-padding" style="text-align: center">
                    <div style="display: inline-block; justify-content: center">
                        <button type="submit" class="button is-medium" style="background-color: lightblue">Save</button>
                    </div>
                    <div style="display: inline-block">
                        <a href="{{ route('fooeys.index') }}" class="button is-medium"
                           style="background-color: lightblue">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
