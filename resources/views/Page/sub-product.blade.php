@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/sub-product.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="content-3">
    <div class="container content-3-box d-flex justify-content-center flex-column align-items-center">
        <p class="mt-5 text-topic m-0">Product Detail</p>
        <div class="row mt-1">
            <div class="box col-3 p-2">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <div class="bottom-absolute">
                        <p class="absolute-text">Meja</p>
                    </div>                   
                    <img src="{{ asset('assets/Images/Portfolio/Rectangle 23.png') }}" alt="image-1" class="w-100"> 
                </div>
            </div>
            <div class="box col-3 p-2">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <div class="bottom-absolute">
                        <p class="absolute-text">Meja</p>
                    </div> 
                    <img src="{{ asset('assets/Images/Portfolio/Rectangle 24.png') }}" alt="image-6" class="w-100">    
                </div>
            </div>
            <div class="box col-3 p-2">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <div class="bottom-absolute">
                        <p class="absolute-text">Meja</p>
                    </div> 
                    <img src="{{ asset('assets/Images/Portfolio/Rectangle 25.png') }}" alt="image-7" class="w-100">    
                </div>
            </div>
            <div class="box col-3 p-2">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <div class="bottom-absolute">
                        <p class="absolute-text">Meja</p>
                    </div> 
                    <img src="{{ asset('assets/Images/Portfolio/Rectangle 26.png') }}" alt="image-8" class="w-100">    
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="box col-3 p-2">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <div class="bottom-absolute">
                        <p class="absolute-text">Meja</p>
                    </div> 
                    <img src="{{ asset('assets/Images/Portfolio/Rectangle 27.png') }}" alt="image-9" class="w-100">    
                </div>
            </div>
            <div class="box col-3 p-2">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <div class="bottom-absolute">
                        <p class="absolute-text">Meja</p>
                    </div> 
                    <img src="{{ asset('assets/Images/Portfolio/Rectangle 28.png') }}" alt="image-10" class="w-100">    
                </div>
            </div>
            <div class="box col-3 p-2">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <div class="bottom-absolute">
                        <p class="absolute-text">Meja</p>
                    </div> 
                    <img src="{{ asset('assets/Images/Portfolio/Rectangle 29.png') }}" alt="image-11" class="w-100">    
                </div>
            </div>
            <div class="box col-3 p-2">
                <div class="box-image-content-3">
                    <div class="absolute"></div>
                    <div class="bottom-absolute">
                        <p class="absolute-text">Meja</p>
                    </div> 
                    <img src="{{ asset('assets/Images/Portfolio/Rectangle 30.png') }}" alt="image-12" class="w-100">    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')

@endsection