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
            @foreach($productType as $type)

            <div class="col-6 p-3">
                <a href="{{ url('/products') . '/' . $type['id'] }}"><div class="box-image-content-3">
                    <div class="absolute"></div>
                    <p class="absolute-text">{{ $type->name }}</p>
                    <img src="{{ asset('storage/Images/ProductType') . '/' . $type['image_path'] }}" alt="image-1" class="w-100" height="250"> 
                </div></a>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection

@section('custom-css')

@endsection