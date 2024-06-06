@extends('auth.template')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/portfolioType.css') }}">
@endsection

@section('content-register')

<div class="container">
    <div class="d-flex flex-column align-items-center   ">
        <p class="topic poppins-bold m-0">Portfolio Type</p>
        <div class="d-flex justify-content-end w-100 pr-3">
            <a href="/admin/portfolioType/add" class="mb-3">
                <img src="{{ asset('assets/Images/Icon/plus.png') }}" alt="plus" width="30">
            </a>
        </div>
        <table class="table table-striped w-100">
            <tr>
                <th class="text-center">#Id</th>
                <th class="text-center">Name</th>
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
                <td>{{ $dat['name'] }}</td>
                <td><img src="{{ asset('storage/Images/PortfolioType') . '/' . $dat['image_path'] }}" alt="" width="250" height="100%"></td>
                <td class="d-flex justify-content-around">
                    <a href="{{ url('/admin/portfolioType/edit') . '/' . $dat['id'] }}"><img src="{{ asset('assets/Images/Icon/edit.png') }}" width="30" alt="edit"></a>
                    <a href="{{ url('/admin/portfolioType/delete') . '/' . $dat['id'] }}"><img src="{{ asset('assets/Images/Icon/delete.png') }}" width="30" alt="delete"></a>
                </td>
            </tr>
            @endforeach
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
            text: "Portfolio Type Berhasil Ditambahkan!", 
        });
    });
    @elseif(session('status') == 'delete')
        $(document).ready(function() {
                Swal.fire({
                icon: 'success',
                title: 'Delete',
                text: "Portfolio Type Berhasil Dihapus!", 
            });
        });
    @endif
    @if(session('status') == 'edit')
    $(document).ready(function() {
            Swal.fire({
            icon: 'success',
            title: 'Edit',
            text: "Portfolio Type Berhasil Diedit!", 
        });
    });
    @endif
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
@endsection