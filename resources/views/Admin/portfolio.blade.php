@extends('auth.template')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/portfolio.css') }}">
@endsection

@section('content-register')

<div class="container">
    <div class="d-flex flex-column align-items-center">
        <p class="topic poppins-bold m-0">Portfolio</p>
        <div class="d-flex justify-content-end w-100 pr-3">
            <a href="/admin/portfolio/add" class="mb-3">
                <img src="{{ asset('assets/Images/Icon/plus.png') }}" alt="plus" width="30">
            </a>
        </div>
        <table id="table" class="table table-striped w-100">
            <thead>
                <tr>
                    <th class="text-center">#Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Type Name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 0; @endphp
                @foreach($portfolio as $data)
                @php
                    $i++;
                @endphp 
                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td>{{ $data['name'] }}</td>
                    <td><img src="{{ asset('storage/Images/Portfolio') . '/' . $data['image_path'] }}" alt="" width="250" height="100%"></td>
                    <td>{{ $data['type']['name'] }}</td>
                    <td class="d-flex justify-content-around">
                        <a href="{{ url('/admin/portfolio/edit') . '/' . $data['id'] }}"><img src="{{ asset('assets/Images/Icon/edit.png') }}" width="30" alt="edit"></a>
                        <a href="{{ url('/admin/portfolio/delete') . '/' . $data['id'] }}"><img src="{{ asset('assets/Images/Icon/delete.png') }}" width="30" alt="delete"></a>
                        <a class="btn btn-danger" href="{{ url('/admin/portfolio/images') . '/' . $data['id'] }}"><p class="m-0">add Image</p></a>
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
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
@endsection