@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/sub-product.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="content-3">
    <div class="container content-3-box d-flex justify-content-center flex-column align-items-center">
        <p class="mt-5 text-topic m-0"data-aos="fade-up">Product Detail</p>
        <div class="row mt-1 w-100">
            @foreach($products as $product)
            <div class="box col-3 p-2"data-aos="fade-down">
                <a href="{{ url('/products') . '/' . $product->type_id . '/' . $product->id }}"><div class="box-image-content-3">
                    <div class="absolute"></div>
                    <div class="bottom-absolute">
                        <p class="absolute-text">{{ $product->name }}</p>
                    </div>                   
                    <img src="{{ asset('storage/Images/Product') . '/' . $product->name . '/' . $product->productImage->image_path }}" class="w-100" width="100%" height="250"> 
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