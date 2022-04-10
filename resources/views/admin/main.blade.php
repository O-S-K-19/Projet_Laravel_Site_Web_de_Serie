<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

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

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css" />
</head>
<body>
<div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('homePage') }}" class="nav-link">@lang('Home')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('homePage') }}" class="nav-link">@lang('Profile')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <form action="{{ route('logout') }}" method="POST" hidden>
          @csrf
        </form>
        <a class="nav-link"
            href="{{ route('logout') }}"
            onclick="event.preventDefault(); this.previousElementSibling.submit();">
            @lang('Deconnexion')
        </a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">

            <li class="nav-item d-none d-sm-inline-block">
               <span style="font-size: 30px; color:whitesmoke; ">Tableau de bord</span>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('manageUsersPage') }}" class="nav-link">Users</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('manageSeriesPage') }}" class="nav-link">Series</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('manageCommentsPage') }}" class="nav-link">Comments</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('manageContactsPage') }}" class="nav-link">Contacts</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ route('manageContactsPage') }}" class="nav-link">Mail box</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('manageFavoritesPage') }}" class="nav-link">Favorite</a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div>
      <div class="container-fluid">



            @yield('content')



      </div><!-- /.container-fluid -->
    </div>

  </div>

  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 {{ config('app.name', 'Laravel') }}.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" ></script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"></script>
</body>
</html>
