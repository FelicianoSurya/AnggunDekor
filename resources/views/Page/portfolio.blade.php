@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="content-3">
    <div class="container content-3-box d-flex justify-content-center flex-column align-items-center">
        <p class="mt-5 text-topic m-0">Portfolio</p>
        <p class="m-0">Looking to elevate your space with elegance? Whether you desire a chic pair of curtains, a stylish roman blind, a sophisticated pelmet, or a complete room or house transformation, we've got you covered. Our vast selection of designer fabrics, exquisite trimmings, luxurious wallpapers, and premium accessories sourced from top suppliers in the industry ensures that we can bring your vision to life. Take a glimpse at some of our recent projects spanning residential, hotel, and restaurant designs.</p>
        <div class="row mt-1">
            <div class="col-6 p-3">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">Floor</p>
                    <img src="{{ asset('assets/Images/Product/image-1.png') }}" alt="image-1" class="w-100"> 
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">Window</p>
                    <img src="{{ asset('assets/Images/Product/image-2.png') }}" alt="image-6" class="w-100">    
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">Sofa</p>
                    <img src="{{ asset('assets/Images/Product/image-3.png') }}" alt="image-7" class="w-100">    
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">Interior</p>
                    <img src="{{ asset('assets/Images/Product/image-4.png') }}" alt="image-8" class="w-100">    
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">Table</p>
                    <img src="{{ asset('assets/Images/Product/image-5.png') }}" alt="image-9" class="w-100">    
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">Interior</p>
                    <img src="{{ asset('assets/Images/Product/image-6.png') }}" alt="image-10" class="w-100">    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center my-4">
    <div class="consultation">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center w-50 cons-left">
                <img src="{{ asset('assets/Images/Services/wa.png') }}" alt="wa">
                <div class="d-flex flex-column align-items-start justify-content-center pl-3">
                    <p class="m opacity">Get a Free Consultation</p>
                    <p class="m-0 opacity" style="font-size:30px">0888 - 8888 - 8888</p>
                </div>
            </div>
            <div class="d-flex align-items-center w-50 ml-3">
                <p class="m-0 mr-3 poppins" style="font-size:10px; width: 250px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, molestiae! Totam voluptatum.</p>
                <button class="btn btn-danger btn-appointment px-4 py-2">Make Appointment</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-css')

@endsection