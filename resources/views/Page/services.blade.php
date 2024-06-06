@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="container-fluid banner p-0 fade-in">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active slide-1">
                <div class="absolute"></div>
                <div class="content-banner container d-flex flex-column align-items-start justify-content-center w-100">
                    <div class="d-flex justify-content-center align-items-center w-100 mb-5">
                        <p class="m-0 text-design poppins-semibold">Our Service</p>
                    </div>
                    <div class="row w-100">
                        <div class="col py-2">
                            <a href="/products/2"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/interior.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">Gorden</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/wallpaper.png') }}" alt="bed">
                                <p class="m-0 mt-3 text">Wallpaper</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a href="/products/8"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/carpet.png') }}" alt="table">
                                <p class="m-0 mt-3 text">Carpet</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a href="/products/11"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/sofa.png') }}" alt="wallpaper">
                                <p class="m-0 mt-3 text">Sofa</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a href="/products/13"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/spc.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">SPC Flooring</p>
                            </div></a>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col py-2">
                            <a href="/products/7"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/rollerblind.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">Roller Blind</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/wallpanel.png') }}" alt="bed">
                                <p class="m-0 mt-3 text">Wallpanel</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a href="/products/9"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/carpettile.png') }}" alt="table">
                                <p class="m-0 mt-3 text">Carpet tile</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a href="/products/12"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/bekleedsofa.png') }}" alt="wallpaper">
                                <p class="m-0 mt-3 text">Bekleed Sofa</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a href="/products/14"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/vinyl.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">Vinyl Flooring</p>
                            </div></a>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col py-2">
                            <a href="/products/7"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/zebrablind.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">Zebra Blind</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/insectscreen.png') }}" alt="bed">
                                <p class="m-0 mt-3 text">Insect Screen</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a href="/products/10"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/carpetcustom.png') }}" alt="table">
                                <p class="m-0 mt-3 text">Carpet Customs</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/headboard.png') }}" alt="wallpaper">
                                <p class="m-0 mt-3 text">Headboard</p>
                            </div></a>
                        </div>
                        <div class="col py-2">
                            <a href="/products/15"><div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/ceiling.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">Decking WPC</p>
                            </div></a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consultation fade-in">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center w-50 cons-left">
                <img src="{{ asset('assets/Images/Services/wa.png') }}" alt="wa">
                <div class="d-flex flex-column align-items-start justify-content-center pl-3">
                    <p class="m opacity">Dapatkan Gratis Konsultasi dan Pengukuran</p>
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
<div class="c"></div>


<div class="content-2" data-aos="fade-up">
    <div class="container d-flex flex-column align-items-center justify-content-center">
        {{-- <p class="topic poppins-semibold mt-4"><span style="color:#E00000">Process</span> We Follow</p>
        <div class="d-flex justify-content-around align-items-center">
            <div class="circle-big d-flex flex-column align-items-center justify-content-center">
                <div class="circle-small">
                    <p class="m-0 opacity" style="color:white;font-size:30px">01</p>
                </div>
                <p class="m-0 text-center poppins-bold">Research Project</p>
                <p class="m-0 text-center poppins">Lorem askdan sadda dasdad</p>
            </div>
            <img class="p-4" src="{{ asset('assets/Images/Icon/arrow.png') }}" alt="arrow">
            <div class="circle-big d-flex flex-column align-items-center justify-content-center">
                <div class="circle-small">
                    <p class="m-0 opacity" style="color:white;font-size:30px">02</p>
                </div>
                <p class="m-0 text-center poppins-bold">Evaluate Plans</p>
                <p class="m-0 text-center poppins">Lorem askdan sadda dasdad</p>
            </div>
            <img class="p-4" src="{{ asset('assets/Images/Icon/arrow.png') }}" alt="arrow">
            <div class="circle-big d-flex flex-column align-items-center justify-content-center">
                <div class="circle-small">
                    <p class="m-0 opacity" style="color:white;font-size:30px">03</p>
                </div>
                <p class="m-0 text-center poppins-bold">Best Results</p>
                <p class="m-0 text-center poppins">Lorem askdan sadda dasdad</p>
            </div>
        </div> --}}
    </div>
</div>
@endsection

@section('custom-js')
<script>
    AOS.init();
</script>
@endsection
