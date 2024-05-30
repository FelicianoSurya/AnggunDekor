<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>Anggun Dekor</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/Images/LOGO/logo.png') }}">
    <!-- CSS -->
    <!-- Bootstraps 5 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- JQuery UI -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />
    <!-- Custom CSS Navigation Bar -->
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <!-- Custom CSS Footer -->
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    @yield('custom-css')
</head>

<body>
    <a class="whatsappIcon" href="https://wa.me/6281253202998" target="_blank"><div class="whatsapp">
        <img src="{{ asset('assets/Images/Icon/whatsapp.png') }}" alt="png" width="40">
    </div></a>
    @include('template.header')

    <div class="content-container">
        @yield('content')
    </div>
    @include('template.footer')



    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> -->


    <!-- <script src="{{ asset('js/sweetalert/sweetalert.js') }}"></script> -->

    <!-- Custom JS Navigation Bar -->
    @yield('custom-js')
</body>
</html>
