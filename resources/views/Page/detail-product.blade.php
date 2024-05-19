@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/detail-product.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="content-3">
<div class="container content-3-box d-flex justify-content-center flex-column align-items-center">
        <div class="d-flex align-items-center mt-5 mb-3">
            <div class="d-flex flex-column align-items-start justify-content-start w-50 p-3">
                <img src="{{ asset('storage/Images/Product') . '/' . $product->name . '/' . $product->productImage->image_path }}" alt="main-image" width="100%" class="mb-3 rounded">
                <div class="row">
                    @foreach($product->subProductImage as $image)
                    <div class="col-4">
                        <img src="{{ asset('storage/Images/Product') . '/' . $product->name . '/' . $image->image_path }}" alt="main-image" width="100%" class="rounded">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex flex-column desc-product w-50 pl-5">
                <p class="poppins-bold" style="font-size:40px">{{ $product->name }}</p>
                <p class="mt-3">Deskripsi Product : </p>
                {{ strip_tags(str_replace('&nbsp;' , '' , $product->description)) }}
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
