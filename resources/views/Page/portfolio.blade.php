@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="content-3">
    <div class="container content-3-box d-flex justify-content-center flex-column align-items-center p-5">
        <p class="mt-5 text-topic m-0" data-aos="fade-up">Portfolio</p>
        <p class="m-0" data-aos="fade-up">Looking to elevate your space with elegance? Whether you desire a chic pair of curtains, a stylish roman blind, a sophisticated pelmet, or a complete room or house transformation, we've got you covered. Our vast selection of designer fabrics, exquisite trimmings, luxurious wallpapers, and premium accessories sourced from top suppliers in the industry ensures that we can bring your vision to life. Take a glimpse at some of our recent projects spanning residential, hotel, and restaurant designs.</p>
        <div class="row mt-1 px-5">
            @foreach($portfolio as $data)
            <div class="col-6 p-3" data-aos="fade-right">
                <a href="{{ url('/portfolio') . '/' . $data->id }}"><div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">{{ $data->name }}</p>
                    <img src="{{ asset('storage/Images/Portfolio') . '/' . $data['image_path'] }}" alt="image-1" class="w-100" height="300"> 
                </div></a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center my-4">
    <div class="consultation" data-aos="fade-up">
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
                <a href="https://wa.me/6281253202998" target="_blank"><button class="btn btn-danger btn-appointment px-4 py-2">Buat Janji</button></a>
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
