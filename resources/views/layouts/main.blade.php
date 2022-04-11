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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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



    <footer class="bg-white">
        <div class="container py-5">
            <div class="py-4 row">
                <div class="mb-4 col-lg-4 col-md-6 mb-lg-0"><img src="img/logo.png" alt="" width="180" class="mb-3">
                    <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt.</p>
                    <ul class="mt-4 list-inline">
                        <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i
                                    class="fa fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i
                                    class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>
                <div class="mb-4 col-lg-2 col-md-6 mb-lg-0">
                    <h6 class="mb-4 text-uppercase font-weight-bold">Site-series</h6>
                    <ul class="mb-0 list-unstyled">
                        <li class="mb-2"><a href="{{ route('homePage') }}" class="text-muted">Home</a></li>
                        <li class="mb-2"><a href="{{ route('seriesPage') }}" class="text-muted">Series</a></li>
                        <li class="mb-2"><a href="{{ route('contactPage') }}" class="text-muted">Contact</a></li>
                        @if (Route::has('login'))
                            <li class="mb-2"><a href="#" class="text-muted">My favorites ()</a></li>
                            <li class="mb-2"><a href="" class="text-muted">Mail BOX ()</a></li>
                        @endif
                    </ul>
                </div>
                <div class="mb-4 col-lg-2 col-md-6 mb-lg-0">
                    <h6 class="mb-4 text-uppercase font-weight-bold">Connectez-vous avec :</h6>
                    <ul class="mb-0 list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted">Facebook</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Google</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Pinterest</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Twiter</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0">
                    <h6 class="mb-4 text-uppercase font-weight-bold">Newsletter</h6>
                    <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque
                        temporibus.</p>
                    <div class="p-1 border rounded">
                        <div class="input-group">
                            <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1"
                                class="border-0 form-control shadow-0">
                            <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link"><i
                                        class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyrights -->
        <div class="py-4 bg-light">
            <div class="container text-center">
                <p class="py-2 mb-0 text-muted"><span>© Copyright DCISS 2022</span></p>
            </div>
        </div>
    </footer>


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
