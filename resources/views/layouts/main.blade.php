<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <link rel="stylesheet" type='text/css' href="/resources/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">

    {{-- {{-- <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'> --}}
@yield('head')
</head>

<body>

    <!-- Start Top Bar -->
    <div class="top-bar">
        <div class="top-bar-left" style="flex: justify">
            <ul class="menu" style="flex:center">
                <li class="menu-text">Welcome to Series</li>
                <li><a href="{{ route('homePage') }}">Home</a></li>
                <li><a href="{{ route('seriesPage') }}">Series</a></li>
                <li><a href="{{ route('contactPage') }}">Contact</a></li>
                @if (Route::has('login'))
                    {{--@if((Auth::user()->role == 'admin') || (Auth::user()->role == 'producer'))--}}
                <li><a href="#">My Favorites ()</a></li>
                <li><a href="#">Mail BOX ()</a></li>
                <li><a href="{{ url('/admin') }}">Administration</a></li>
                <li><a href="#">Deconnexion</a></li>

                @endif
            </ul>
        </div>
            <div class="top-bar-right" style="flex: justify">
                <ul class="menu" style="flex:left">
            @if (Route::has('login'))
            <!--<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">-->
                @auth
                    @if(Auth::user()->role == 'producer')
                        <li><a href="{{ url('/producer/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                    @else
                        <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                    @endif
            @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                    @endif
                @endauth
           <!-- </div>-->
            @endif
        </ul>
        </div>
    </div>
    <!-- End Top Bar -->

    <div class="callout large primary">
        <div class="text-center">
            <h1>{{ $title ?? "Series" }}</h1>
            <h2 class="subheader">Series Master</h2>
        </div>
    </div>

    <article class="grid-container">

        @yield('content')

    </article>



    <div class="callout large primary" style="position: relative;
    top: 50px; font-size: 15px;">

        <div class="s-footer__main">

            <div class="row">

                <div class="column large-6 medium-6 tab-12 s-footer__info">

                    <h5>@lang('About Our Site')</h5>

                    <p>
                    Lorem ipsum Ut velit dolor Ut labore id fugiat in ut
                    fugiat nostrud qui in dolore commodo eu magna Duis
                    cillum dolor officia esse mollit proident Excepteur
                    exercitation nulla. Lorem ipsum In reprehenderit
                    commodo aliqua irure.
                    </p>

                </div>

                <div class="column large-3 medium-3 tab-6 s-footer__site-links">

                    <h5>@lang('Site Links')</h5>


                </div>

                <div class="column large-2 medium-3 tab-6 s-footer__social-links">

                    <h5>Follow Us</h5>

                    <ul>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="#0">Dribbble</a></li>
                        <li><a href="#0">Pinterest</a></li>
                        <li><a href="#0">Instagram</a></li>
                    </ul>

                </div>

            </div>

        </div>

        <div class="s-footer__bottom">
            <div class="row">
                <div class="column">
                    <div class="ss-copyright">
                        <span>© Copyright DCISS 2022</span>
                    </div>
                </div>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M7.5 1.5l.354-.354L7.5.793l-.354.353.354.354zm-.354.354l4 4 .708-.708-4-4-.708.708zm0-.708l-4 4 .708.708 4-4-.708-.708zM7 1.5V14h1V1.5H7z" fill="currentColor"></path></svg>
                </a>
            </div>
        </div>

    </div>



    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
    <script>
        $(document).foundation();

    </script>
</body>

</html>
