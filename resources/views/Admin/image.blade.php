@extends('auth.template')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/portfolioType.css') }}">
@endsection

@section('content-register')

<div class="container">
    <div class="d-flex flex-column align-items-center   ">
        <p class="topic poppins-bold m-0">Image Product {{ $product->name }}</p>
        <div class="d-flex justify-content-end w-100 pr-3">
            <a href="{{ url('/admin/productImage') . '/' . $product->id . '/' . 'add' }}" class="mb-3">
                <img src="{{ asset('assets/Images/Icon/plus.png') }}" alt="plus" width="30">
            </a>
        </div>
        <table class="table table-striped w-100">
            <tr>
                <th class="text-center">#Id</th>
                <th class="text-center">Image</th>
                <th class="text-center">Action</th>
            </tr>
            @php $i = 0; @endphp
            @foreach($data as $dat)
            @php
                $i++;
            @endphp
            <tr>
                <td class="text-center">{{ $i }}</td>
                <td><img src="{{ asset('storage/Images/Product') . '/' . $product->name . '/' . $dat['image_path'] }}" alt="" width="250" height="100%"></td>
                <td class="d-flex justify-content-around">
                    <a href="{{ url('/admin/productImage/edit') . '/' . $product->id . '/' . $dat['id'] }}"><img src="{{ asset('assets/Images/Icon/edit.png') }}" width="30" alt="edit"></a>
                    <a href="{{ url('/admin/productImage/delete') . '/' . $product->id . '/' . $dat['id'] }}"><img src="{{ asset('assets/Images/Icon/delete.png') }}" width="30" alt="delete"></a>
                    <a href="{{ url('/admin/productImage/active') . '/' . $product->id . '/' . $dat['id'] }}" class="btn @if($dat['active_image'] === 0) btn-secondary @else btn-danger @endif" href="{{ url('/admin/products') . '/' . $product['id'] }}"><p class="m-0">@if($dat['active_image'] === 0) Active @else Actived @endif</p></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection