<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <div>
        <div>
            <h1>Create a new fooey</h1>

            <form method="POST" action="/fooeys">
                @csrf

                <div>
                    <label class="field" for="">Title</label>

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
                    <label class="" for="excerpt">Excerpt</label>


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
                    <label class="" for="body">Body</label>

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


