@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/detail-portfolio.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="content-3">
<div class="container content-3-box d-flex justify-content-center flex-column align-items-center">
        <p class="mt-5 text-topic m-0"data-aos="fade-up">Contact Us</p>
        <div class="d-flex justify-content-between align-items-center mt-5 mb-3">
            <div class="d-flex flex-column align-items-start justify-content-start w-50"data-aos="fade-right">
                <p class="m-1">Our Office</p>
                <div class="d-flex">
                    <img width="25" height="25" src="{{ asset('assets/Images/Icon/location.png') }}" alt="location">
                    <div class="d-flex flex-column pl-3">
                        <p class="m-1 poppins-bold">Jl. Jenderal Sudirman No.508, Klandasan Ilir, Kec. Balikpapan Kota, Kota Balikpapan, Kalimantan Timur 76114</p>
                        <p class="m-1 poppins">Anggun Dekor menyediakan layanan untuk: merancang dan membuat interior ruangan serta kitchen set, pemasangan vinyl, pembuatan dan pemasangan plafon sesuai kebutuhan, penempelan wallpaper, dan pembuatan furniture khusus.</p>
                    </div>
                </div>
                <p class="mt-5">Call</p>
                <div class="d-flex">
                    <img width="20" height="25" src="{{ asset('assets/Images/Icon/location.png') }}" alt="location">
                    <div class="d-flex flex-column pl-3">
                        <p class="m-1 poppins-bold">0812 - 5320 - 2998</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left">
                <img width="75%" height="75%" src="{{ asset('assets/Images/maps.png') }}" alt="maps">
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center my-4" data-aos="fade-up">
    <div class="consultation">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center w-50 cons-left">
                <img src="{{ asset('assets/Images/Services/wa.png') }}" alt="wa">
                <div class="d-flex flex-column align-items-start justify-content-center pl-3">
                    <p class="m opacity">Dapatkan Gratis Konsultasi</p>
                    <p class="m-0 opacity" style="font-size:30px">0812 - 5320 - 2998</p>
                </div>
            </div>
            <div class="d-flex align-items-center w-50 ml-3">
                <p class="m-0 mr-3 poppins" style="font-size:10px; width: 250px">Dapatkan Informasi yang lebih lengkap dan terkini dengan hubungi nomor yang ada.</p>
                <button class="btn btn-danger btn-appointment px-4 py-2">Buat Janji</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script>
    AOS.init();
</script>
@endsection
