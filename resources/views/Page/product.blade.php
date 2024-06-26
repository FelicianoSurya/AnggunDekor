@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="content-3">
    <div class="container d-flex justify-content-center flex-column align-items-center px-1 px-lg-5 px-md-3">
        <p class="mt-5 text-topic m-0" data-aos="fade-up">Our Product</p>
        <div class="row mt-1 fade-in px-1 px-lg-5 px-md-3">
            @foreach($productType as $type)

            <div class="col-12 col-lg-6 col-md-6 p-3" data-aos="fade-right">
                <a href="{{ url('/products') . '/' . $type['id'] }}"><div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">{{ $type->name }}</p>
                    <img src="{{ asset('storage/Images/ProductType') . '/' . $type['image_path'] }}" alt="image-1" class="w-100" height="300"> 
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