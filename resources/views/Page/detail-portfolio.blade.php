@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/detail-portfolio.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="content-3">
    <div class="container content-3-box d-flex justify-content-center flex-column align-items-center">
        <p class="mt-5 text-topic m-0">{{ $data->name }}</p>
        <div class="row mt-2">
            @foreach($portfolio as $dat)
            <div class="col-3 p-1">
                <img width="100%" class="popup-image" src="{{ asset('storage/Images/Portfolio') . '/' . $data->name . '/' . $dat['image_path'] }}" alt="rect-23" height="350">
            </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document"> <!-- Use modal-dialog-scrollable for vertical scrolling -->
            <div class="modal-content">
            <div class="modal-body">
                <img width="100%" id="popupImage" class="img-fluid" src="" alt="Popup Image">
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center my-4">
    <div class="consultation">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center w-50 cons-left">
                <img src="{{ asset('assets/Images/Services/wa.png') }}" alt="wa">
                <div class="d-flex flex-column align-items-start justify-content-center pl-3">
                    <p class="m opacity">Get a Free Consultation</p>
                    <p class="m-0 opacity" style="font-size:30px">0888 - 8888 - 8888</p>
                </div>
            </div>
            <div class="d-flex align-items-center w-50 ml-3">
                <p class="m-0 mr-3 poppins" style="font-size:10px; width: 250px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, molestiae! Totam voluptatum.</p>
                <button class="btn btn-danger btn-appointment px-4 py-2">Make Appointment</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script>
  $(document).ready(function() {
    $('.popup-image').click(function() {
      var imageUrl = $(this).attr('src');
      $('#popupImage').attr('src', imageUrl); // Set the src attribute of the modal image
      $('#imageModal').modal('show'); // Show the modal
    });
  });
</script>
@endsection