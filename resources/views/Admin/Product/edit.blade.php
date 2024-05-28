@extends('auth.template')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/portfolioType.css') }}">
@endsection

@section('content-register')

<div class="container w-100 d-flex flex-column align-items-center">
    <div class="d-flex flex-column align-items-center">
        <p class="topic poppins-bold m-0">Edit Product Type</p>
    </div>
    <form method="POST" class="w-50" action="{{ url('/admin/products/edit') }}" enctype="multipart/form-data">
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
            <label for="description" class="col-md-12 col-form-label poppins-bold">{{ __('Description') }}</label>

            <div class="col-md-12">
                <textarea name="description" id="content" class="form-control">{{ $data->description }}</textarea>
            </div>

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row flex-column">
            <label for="Type_id" class="col-md-12 col-form-label poppins-bold">{{ __('Product Type') }}</label>

            <div class="col-md-12 m-0 row flex-column img-invalid">
                <select name="type_id" id="type_id" class="form-control">
                    @foreach($type as $data)
                    <option @if($data->id === $data->id) selected @endif value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
                </select>

                @error('type_id')
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
                <a href="{{ url('/admin/products') }}"><button type="button" class="btn btn-danger" class="close">Cancel</button></a>
            </div>
        </div>
    </form>
</div>

@endsection

@section('custom-js')
<script>
    $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    $('#content').summernote({
        height: 300, // Set the height of the editor
        placeholder: 'Enter your content here...', // Placeholder text
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
        ],
        callbacks: {
            // You can add additional callbacks here if needed
            // For example, to get the content of the editor on change
            onChange: function(contents, $editable) {
                // You can do something with the contents here
            }
        }
    });
});
</script>
@endsection