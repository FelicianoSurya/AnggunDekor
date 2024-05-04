@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="content-3">
    <div class="container content-3-box d-flex justify-content-center flex-column align-items-center">
        <p class="mt-5 text-topic m-0">Our Product</p>
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
@endsection

@section('custom-css')

@endsection