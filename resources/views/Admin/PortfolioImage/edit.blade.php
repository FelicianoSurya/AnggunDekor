@extends('auth.template')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/portfolioType.css') }}">
@endsection

@section('content-register')

<div class="container w-100 d-flex flex-column align-items-center">
    <div class="d-flex flex-column align-items-center">
        <p class="topic poppins-bold m-0">Edit Image Portfolio</p>
    </div>
    <form method="POST" class="w-50" action="{{ url('/admin/PortfolioImage') . '/' . 'edit' }}" enctype="multipart/form-data">
        @csrf

        <input id="portfolio_id" type="hidden" class="form-control" name="portfolio_id" value="{{ $data->id }}">
        <input id="image_id" type="hidden" class="form-control" name="image_id" value="{{ $image->id }}">
        <input id="portfolio_name" type="hidden" class="form-control" name="portfolio_name" value="{{ $data->name }}">
        <div class="form-group row flex-column">
            <label for="image" class="col-md-12 col-form-label poppins-bold">{{ __('Image') }}</label>

            <div class="col-md-12 m-0 row flex-column img-invalid">
                <input type="file" placeholder="Image" id="image" name="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" />

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
                <a href="{{ url('/admin/portfolio') . '/' . $data->id }}"><button type="button" class="btn btn-danger" class="close">Cancel</button></a>
            </div>
        </div>
    </form>
</div>

@endsection