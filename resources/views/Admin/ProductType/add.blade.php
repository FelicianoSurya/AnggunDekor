@extends('auth.template')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/portfolioType.css') }}">
@endsection

@section('content-register')

<div class="container w-100 d-flex flex-column align-items-center">
    <div class="d-flex flex-column align-items-center">
        <p class="topic poppins-bold m-0">Tambah Product Type</p>
    </div>
    <form method="POST" class="w-50" action="{{ url('/admin/productType/add') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row flex-column">
            <label for="name" class="col-md-12 col-form-label poppins-bold">{{ __('Name') }}</label>

            <div class="col-md-12">
                <input id="name" type="text" class="form-control" name="name" >
            </div>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group row flex-column">
            <label for="image" class="col-md-12 col-form-label poppins-bold">{{ __('Image') }}</label>

            <div class="col-md-12 m-0 row flex-column img-invalid">
                <input type="file" placeholder="Product Type Imge" id="image" name="image" class="form-control @error('image') is-invalid @enderror" name="email" value="{{ old('image') }}" />

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div class="form-group modal-btn row justify-content-end align-items-end mb-0">
            <div class="col-2">
                <button type="submit" class="btn btn-light px-4">
                    {{ __('Save') }}
                </button>
            </div>
            <div class="col-2">
                <a href="{{ url('/admin/productType') }}"><button type="button" class="btn btn-danger" class="close">Cancel</button></a>
            </div>
        </div>
    </form>
</div>

@endsection