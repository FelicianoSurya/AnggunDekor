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
                <img data-aos="fade-right" src="{{ asset('storage/Images/Product') . '/' . $product->name . '/' . $product->productImage->image_path }}" alt="main-image" width="100%" class="mb-3 rounded">
                <div class="row">
                    @foreach($product->subProductImage as $image)
                    <div class="col-4"data-aos="fade-up">
                        <img src="{{ asset('storage/Images/Product') . '/' . $product->name . '/' . $image->image_path }}" alt="main-image" width="100%" class="rounded">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex flex-column desc-product w-50 pl-5" data-aos="fade-left">
                <p class="poppins-bold" style="font-size:40px">{{ $product->name }}</p>
                <div>
                    {!! $product->description !!}
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <a href="https://wa.me/6281253202998" target="_blank" class="d-flex"><div class="d-flex btn btn-lg btn-whatsapp justify-content-center align-items-center box-button-whatsapp">
                        <p class="m-0 mr-2">WhatsApp</p>
                        <img src="{{ asset('assets/Images/Icon/whatsapp.png') }}" alt="whatsapp" width="100%">
                    </dv></a>
                </div>
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
