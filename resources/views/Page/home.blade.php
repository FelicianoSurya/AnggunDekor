@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="container-fluid banner p-0">
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
                        <p class="m-0 ml-3 text-design poppins-semibold">Design Interior</p>
                    </div>
                    <div class="mt-5">
                        <p class="company-name poppins-bold">Anggun Dekor</p>
                        <p class="poppins">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora accusantium pariatur aliquam ut accusamus quis atque dolores, itaque in rem recusandae animi quas totam quaerat ab enim nulla delectus facere.</p>
                        <button class="btn btn-lg btn-danger px-5 btn-product">Products</button>
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
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
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
        <img src="{{ asset('assets/Images/furniture/interior.png') }}" alt="interior">
        <div class="d-flex flex-column w-100 ml-5">
            <div class="d-flex justify-content-start align-items-center w-100 mb-3">
                <hr class="hr-border m-0">
                <p class="m-0 ml-3 text-design poppins-semibold">Interior Ruangan</p>
            </div>
            <p class="content-2-topic poppins-semibold">Design Interior dengan Anggun Dekor</p>
            <p class="mt-3 poppins">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt fugit voluptate aliquam facilis tempore sunt laborum id ad, debitis molestias animi incidunt laudantium excepturi ipsa, voluptatibus, quas minus dicta rem.</p>
            <div class="mt-3 row w-100">
                <div class="col-6">
                    <img src="{{ asset('assets/Images/Home/interior-1.png') }}" alt="inter-1" class="w-100 px-0 py-1">    
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/Images/Home/interior-2.png') }}" alt="inter-2" class="w-100 px-0 py-1">    
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/Images/Home/interior-3.png') }}" alt="inter-3" class="w-100 px-0 py-1">    
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/Images/Home/interior-4.png') }}" alt="inter-4" class="w-100 px-0 py-1">    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-3">
    <div class="container content-3-box">
        <div class="row mt-4">
            <div class="col-6 p-3">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">Living Room</p>
                    <img src="{{ asset('assets/Images/Home/interior-5.png') }}" alt="inter-5" class="w-100"> 
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">Office</p>
                    <img src="{{ asset('assets/Images/Home/interior-6.png') }}" alt="inter-6" class="w-100">    
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">Bed Room</p>
                    <img src="{{ asset('assets/Images/Home/interior-7.png') }}" alt="inter-7" class="w-100">    
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">Store</p>
                    <img src="{{ asset('assets/Images/Home/interior-8.png') }}" alt="inter-8" class="w-100">    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-css')

@endsection