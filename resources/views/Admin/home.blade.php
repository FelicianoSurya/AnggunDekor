@extends('auth.template')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/home.css') }}">
@endsection

@section('content-register')

<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-4 box-card p-0 m-5">
            <div class="d-flex flex-column align-items-center justify-content-between">
                <img src="{{ asset('assets/Images/Icon/product.png') }}" alt="product" width="80%" class="p-5">
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <a href="/admin/products" class="button-card btn btn-lg"><p class="m-0 p-3 poppins-semibold">Product</p></a>
                    <a href="/admin/productType" class="button-card btn btn-lg"><p class="m-0 p-3 poppins-semibold">Product Type</p></a>
                </div>
            </div>
        </div>
        <div class="col-4 box-card p-0 m-5">
            <div class="d-flex flex-column align-items-center justify-content-between">
                <img src="{{ asset('assets/Images/Icon/portfolio.png') }}" alt="portfolio" width="80%" class="p-5">
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <a href="/admin/portfolio" class="button-card btn btn-lg"><p class="m-0 p-3 poppins-semibold">Portfolio</p></a>
                    <a href="/admin/portfolioType" class="button-card btn btn-lg"><p class="m-0 p-3 poppins-semibold">Portfolio Type</p></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection