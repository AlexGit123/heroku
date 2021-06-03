<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">


@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a style="padding: 2%;" href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            <a style="padding: 2%;" href="{{ route('fooeys.index') }}" class="text-sm text-gray-700 underline">Fooey</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif

<div style="text-align: center" class="card">
    <div class="card-content">
        <div class="content">
            <h1> Why Password Management is so important in 2021</h1>

            <p> Password managers ensure that you don't use the same password more than once.</p>

            <p>You only have to remember one strong password instead of reusing or making unsafe passwords.</p>


            <p> Some password managers generate safe passwords for you to prevent hackers from easily obtaining your credentials</p>
        </div>
    </div>
</div>

<div style="padding-left: 40%">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_btjy92kr.json"  background="transparent"  speed="5"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
</div>
