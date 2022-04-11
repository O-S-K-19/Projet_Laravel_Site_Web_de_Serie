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
                @if (!(is_null(Auth::user())))
                    <li><a href="#">My Favorites ()</a></li>
                    <li><a href="#">Mail BOX ()</a></li>
                    @if(Auth::user()->role == 'admin')
                        <li><a href="{{ url('/admin') }}">Administration</a></li>
                    @elseif(Auth::user()->role == 'producer')
                        <li><a href="{{ url('/producer') }}">Resources</a></li>
                    @endif
                    <li><a href="{{ route('upload.index') }}">Upload Some Files Here</a></li>
                @endif
            </ul>
        </div>
            <div class="top-bar-right" style="flex: justify">
                <ul class="menu" style="flex:left">
            @if (Route::has('login'))
            <!--<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">-->
                @auth
                <li class="text-sm text-gray-700 dark:text-gray-500 underline">
                    <form action="{{ route('logout') }}" method="POST" hidden>
                      @csrf
                    </form>
                    <a class="nav-link"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.previousElementSibling.submit();">
                        @lang('Deconnexion')
                    </a>
                  </li>
                    <li><a href="{{ route('profile.show') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Profile</a></li>
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

    <div class="callout small primary">
        <div class="text-center">
            <h1 style="font-size: 25px">{{ $title ?? "Series" }}</h1>
            <h2 style="font-size: 20px" class="subheader">Series Master</h2>
        </div>
    </div>

    <article class="grid-container">

        @yield('content')

    </article>



    <div class="callout small primary" style="position: relative;
    top: 400px; font-size: 15px;">

        <div class="s-footer__main">

            <div class="row">

                <div class="column large-2 medium-6 tab-12 s-footer__info" style="position: relative; left: 100px">

                    <h5>About du Site</h5>

                    <p>
                    C'est un site de critique et location de serie à la senscritique !
                    </p>

                </div>

                <div class="column large-6 medium-3 tab-6 s-footer__social-links" style="position: relative; left: 400px">

                    <h5>Suivez-nous :</h5>

                    <ul>
                        <li ><a href="https://twitter.com/">Twitter</a></li>
                        <li ><a href="https://www.facebook.com/">Facebook</a></li>
                        <li ><a href="https://www.instagram.com/">Instagram</a></li>
                    </ul>

                </div>

            </div>

        </div>

        <div class="s-footer__bottom">

                    <div class="ss-copyright">
                        <span>Copyright © 2022 Series. All Right Reserved :)</span>
                    </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" ></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
    <script>
        $(document).foundation();

    </script>

</body>

</html>
