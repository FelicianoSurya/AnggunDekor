@extends('auth.template')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/portfolioType.css') }}">
@endsection

@section('content-register')

<div class="container w-100 d-flex flex-column align-items-center">
    <div class="d-flex flex-column align-items-center">
        <p class="topic poppins-bold m-0">Edit Portfolio Type</p>
    </div>
    <form method="POST" class="w-50" action="{{ url('/admin/portfolio/edit') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row flex-column">
            <label for="name" class="col-md-12 col-form-label poppins-bold">{{ __('Id') }}</label>

            <div class="col-md-12">
                <input id="id" type="text" class="form-control" name="id" value="{{ $data->id }}" disabled>
                <input id="id" type="hidden" class="form-control" name="id" value="{{ $data->id }}">
            </div>

            @error('PortfolioType ID')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row flex-column">
            <label for="name" class="col-md-12 col-form-label poppins-bold">{{ __('Name') }}</label>

            <div class="col-md-12">
                <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}">
            </div>

            @error('fasilityID')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group row flex-column">
            <label for="image" class="col-md-12 col-form-label poppins-bold">{{ __('Image') }}</label>

            <div class="col-md-12 m-0 row flex-column img-invalid">
                <input type="file" placeholder="Portotype Type Imge" id="image" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" />

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row flex-column">
            <label for="image" class="col-md-12 col-form-label poppins-bold">{{ __('Portolio Type') }}</label>

            <div class="col-md-12 m-0 row flex-column img-invalid">
                <select name="type_id" id="type_id" class="form-control">
                    @foreach($type as $typ)
                    <option @if($data->id === $data->id) selected @endif value="{{ $data->id }}">{{ $typ->name }}</option>
                    @endforeach
                </select>

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
                    {{ __('Update') }}
                </button>
            </div>
            <div class="col-2">
                <a href="{{ url('/admin/portfolioType') }}"><button type="button" class="btn btn-danger" class="close">Cancel</button></a>
            </div>
        </div>
    </form>
</div>

@endsection