@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="container-fluid banner p-0" data-aos="fade-down">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner">
            <div class="carousel-item active slide-1">
                <div class="absolute"></div>
                <div class="content-banner d-flex flex-column align-items-start justify-content-center w-50">
                    <div class="d-flex justify-content-start align-items-center w-100 mb-5">
                        <hr class="w-25 hr-border m-0">
                        <p class="m-0 ml-3 text-design poppins-semibold" data-aos="fade-down">Anggun Dekor</p>
                    </div>
                    <div class="mt-2">
                        <p class="company-name poppins-bold" data-aos="fade-down">Interior Dekorasi</p>
                        <p class="poppins" data-aos="fade-down">Anggun Dekor menghadirkan solusi lengkap untuk mewujudkan ruang impian Anda. Dari interior dekorasi siap pakai hingga pemasangan lantai vinyl, kami siap membantu Anda menciptakan rumah idaman Anda. Temukan perlengkapan rumah berkualitas tinggi dan layanan yang menginspirasi hanya di Anggun Dekor!</p>
                        <a href="/products"><button class="btn btn-lg btn-danger px-5 btn-product">Produk</button></a>
                    </div>
                </div>
            </div>
            <!-- <div class="carousel-item slide-1">
                <div class="absolute"></div>
            </div>
            <div class="carousel-item slide-1">
                <div class="absolute"></div>
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="z-index:1000">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container content-2 py-5 px-0">
    <div class="d-flex">
        <img src="{{ asset('assets/Images/Home/sofa-1.jpg') }}" width="100%" height="650" data-aos="fade-right" alt="interior">
        <div class="d-flex flex-column w-100 ml-5" data-aos="fade-left">
            <div class="d-flex justify-content-start align-items-center w-100 mb-3">
                <hr class="hr-border m-0">
                <p class="m-0 ml-3 text-design poppins-semibold">Interior Dekorasi</p>
            </div>
            <p class="content-2-topic poppins-semibold">Interior Dekorasi dengan Anggun Dekor</p>
            <p class="mt-3 poppins">Jasa pembuatan Sofa Custom dengan harga menyesuaikan budget dan ruangan untuk kantor, rumah, apartment, cafe, hotel, lobby gedung dan kebutuhan lainnya.</p>
            <div class="mt-3 row w-100">
                <div class="col-6">
                    <img src="{{ asset('assets/Images/Home/interior-5.png') }}" alt="inter-1" widht="100%" height="160" class="w-100 px-0 py-1">
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/Images/Home/interior-6.jpeg') }}" alt="inter-2" widht="100%" height="160" class="w-100 px-0 py-1">
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/Images/Home/sofa-2.jpg') }}" alt="inter-3" widht="100%" height="160" class="w-100 px-0 py-1">
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/Images/Home/interior-4.jpeg') }}" alt="inter-4" widht="100%" height="160" class="w-100 px-0 py-1">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-3">
    <div class="container content-3-box">
        <div class="row mt-4">
            @foreach($productType as $product)
            <div class="col-6 p-3" data-aos="fade-up">
                <a href="{{ url('/products/' . $product['id']) }}"><div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">{{ $product->name }}</p>
                    <img src="{{ asset('storage/Images/ProductType') . '/' . $product['image_path'] }}" alt="inter-5" class="w-100" height="350">
                </div></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script>
    AOS.init();
</script>
@endsection
