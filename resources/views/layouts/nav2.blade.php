<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calculate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wizard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <!-- DATE-PICKER -->
    <link rel="stylesheet" href="{{asset('assets/vendor/date-picker/css/datepicker.min.cs')}}s">


    {{--    @if(App::getLocale() == 'en')--}}
    <link href="{{ asset('assets/bootstrap/css/bootstrap.css') }}"  rel="stylesheet">
   {{-- @elseif(App::getLocale() == 'ar')
    <link href="{{ asset('assets/bootstrap/css/bootstrap.rtl.css') }}"  rel="stylesheet">
    @endif--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('style-css')
</head>
<body>

<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
{{--
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                    <img src="{{asset('assets/imgs/logo.png')}}">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                        <a class="nav-link mx-3" href="{{ url('/meals') }}">
                            My Food
                        </a>
                        <a class="nav-link mx-3" href="{{ url('/calories-calculate') }}">
                            Apps
                        </a>
                        <a class="nav-link mx-3" href="{{route('exercise.categories')}}">
                            Exercies
                        </a>
                        <a class="nav-link mx-3" href="#">
                            Gym
                        </a>
                        <a class="nav-link mx-3" href="#">
                            Store
                        </a>
                        <a class="nav-link mx-3" href="{{route('blog')}}">
                            Bloggers
                        </a>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if (App::getLocale() == 'ar')
                                        {{ LaravelLocalization::getCurrentLocaleName() }}
                                        <img src="{{ asset('assets/imgs/flags/EG.png') }}" alt="">

                                    @else
                                        {{ LaravelLocalization::getCurrentLocaleName() }}
                                        <img src="{{ asset('assets/imgs/flags/US.png') }}" alt="">
                                    @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    @endforeach
                                </div>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('profile',  Auth::user()->user_name)}}">

                                        Setting
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>




                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                             @endguest
                    </ul>
                </div>
        </nav>
--}}


  




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/home-js/jquery-2.1.0.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/home-js/popper.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="{{asset('assets/js/main.js')}}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>



{{--
    <script src="{{asset('assets/js/exercise-js/jquery.min.js')}}"></script>
--}}

    <!-- Bootstrap -->
    <script src="{{asset('assets/js/home-js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('assets/js/home-js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/home-js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/home-js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/home-js/imgfix.min.js')}}"></script>
    <script src="{{asset('assets/js/home-js/mixitup.js')}}"></script>
    <script src="{{asset('assets/js/home-js/accordions.js')}}"></script>


    <script src="{{asset('assets/js/exercise-js/tabs.js')}}"></script>

    <!-- Global Init -->
    <script src="{{asset('assets/js/exercise-js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/exercise-js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/exercise-js/custom.js')}}"></script>

<script src="{{asset('assets/js/jquery.steps.js')}}"></script>

<script src="{{asset('assets/js/wizard.js')}}"></script>
    @yield('scripts')
</body>
</html>
