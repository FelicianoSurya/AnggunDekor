@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/detail-product.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="content-3">
<div class="container content-3-box d-flex justify-content-center flex-column align-items-center">
        <div class="d-flex justify-content-between align-items-center mt-5 mb-3">
            <div class="d-flex flex-column align-items-start justify-content-start w-50 p-3">
                <img src="{{ asset('assets/Images/ProductDetail/Rectangle 10.png') }}" alt="main-image" width="100%">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('assets/Images/ProductDetail/Rectangle 11.png') }}" alt="main-image" width="100%">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('assets/Images/ProductDetail/Rectangle 11.png') }}" alt="main-image" width="100%">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('assets/Images/ProductDetail/Rectangle 11.png') }}" alt="main-image" width="100%">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column desc-product">
                <p class="poppins-bold" style="font-size:40px">Judul Product</p>
                <p class="mt-3">Deskripsi Product : </p>
                <p class="m-0 poppins">Banta + sarung</p>
                <p class="m-0 poppins">Hidden zipper closure</p>
                <p class="m-0 poppins">Bahan berkualitas</p>
                <p class="m-0 mt-3 poppins">Cocok di tempatkan di sofa atau tempat tidur</p>
                <p class="m-0 mt-3 poppins-bold">Product Specification : </p>
                <p class="mt-3 m-0 poppins">DESIGN: Classic</p>
                <p class="m-0 poppins">SIZE 45 X 45</p>
                <div class="d-flex justify-content-center mt-5">
                    <div class="d-flex btn btn-lg btn-whatsapp justify-content-center align-items-center box-button-whatsapp">
                        <p class="m-0 mr-2">WhatsApp</p>
                        <img src="{{ asset('assets/Images/Icon/whatsapp.png') }}" alt="whatsapp" width="100%">
                    </div>
                </div>
            </div>
            
        </div>
    </div>    
</div>

@endsection

@section('custom-js')

@endsection