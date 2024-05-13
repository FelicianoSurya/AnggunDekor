<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Anggun Dekor</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/Images/LOGO/logo.png') }}">
    <!-- CSS -->
    <!-- Bootstraps 5 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- JQuery UI -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />
    <!-- Custom CSS Navigation Bar -->
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JQuery UI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- dataTable -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>


    <!-- Bootstrap & Popper -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @yield('custom-css')
    <link href="{{ asset('assets/css/admin/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid navbar">
            <nav class="container">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <a href="/admin/home"><div class="d-flex align-items-center">
                        <img src="{{ asset('assets/Images/LOGO/logo.png') }}" alt="logo">
                        <p class="m-0 logo-text poppins-semibold">Anggun Dekor</p>
                    </div></a>
                    <div class="d-flex justify-content-around align-items-center">
                        <ul class="d-flex justify-content-around align-items-center m-0">
                            @guest
                                @if (Route::has('login'))
                                    <a href="{{ route('login') }}">
                                        <li>
                                            {{ __('Login') }}
                                        </li>
                                    </a>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a href="/admin/products" class="nav-link poppins-semibold">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/productType" class="nav-link poppins-semibold">Product Type</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/portfolio" class="nav-link poppins-semibold">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/portfolioType" class="nav-link poppins-semibold">Portfolio Type</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle poppins-semibold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                </div>
            </nav>
        </div>
        
        <main class="py-4">
            @yield('content-register')
        </main>
    </div>
    @yield('custom-js')
</body>
</html>