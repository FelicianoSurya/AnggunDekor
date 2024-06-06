@extends('auth.template')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/product.css') }}">
@endsection

@section('content-register')

<div class="container-fluid">
    <div class="d-flex flex-column align-items-center">
        <p class="topic poppins-bold m-0">Products</p>
        <div class="d-flex justify-content-end w-100 pr-3">
            <a href="/admin/products/add" class="mb-3">
                <img src="{{ asset('assets/Images/Icon/plus.png') }}" alt="plus" width="30">
            </a>
        </div>
        <table id="table" class="table table-striped w-100">
            <thead>
                <tr>
                    <th class="text-center">#Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Type Name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            @php $i = 0; @endphp
            @foreach($products as $product)
                @php
                    $i++;
                @endphp
                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td width="20%">{{ $product['name'] }}</td>
                    <td width="40%">{{ $product['description'] }}</td>
                    <td width="10%">{{ $product['type']['name'] }}</td>
                    <td class="d-flex justify-content-around">
                        <a href="{{ url('/admin/products/edit') . '/' . $product['id'] }}"><img src="{{ asset('assets/Images/Icon/edit.png') }}" width="30" alt="edit"></a>
                        <a href="{{ url('/admin/products/delete') . '/' . $product['id'] }}"><img src="{{ asset('assets/Images/Icon/delete.png') }}" width="30" alt="delete"></a>
                        <a class="btn btn-danger" href="{{ url('/admin/products') . '/' . $product['id'] }}"><p class="m-0">add Image</p></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('custom-js')
<script>
    @if($status = Session::get('success'))
        $(document).ready(function() {
            Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "Product Berhasil Ditambahkan!", 
        });
    });
    @elseif(session('status') == 'delete')
        $(document).ready(function() {
                Swal.fire({
                icon: 'success',
                title: 'Delete',
                text: "Product Berhasil Dihapus!", 
            });
        });
    @endif
    @if(session('status') == 'edit')
    $(document).ready(function() {
            Swal.fire({
            icon: 'success',
            title: 'Edit',
            text: "Product Berhasil Diedit!", 
        });
    });
    @endif
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
@endsection