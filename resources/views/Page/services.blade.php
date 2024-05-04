@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
@endsection

@section('content')
<!-- Codenya disini -->
<div class="container-fluid banner p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active slide-1">
                <div class="absolute"></div>
                <div class="content-banner container d-flex flex-column align-items-start justify-content-center w-100">
                    <div class="d-flex justify-content-center align-items-center w-100 mb-5">
                        <p class="m-0 text-design poppins-semibold">Our Service</p>
                    </div>
                    <div class="row w-100">
                        <div class="col-3 py-2">
                            <div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/interior.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">Interior Design</p>
                            </div>
                        </div>
                        <div class="col-3 py-2">
                            <div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/bedroom.png') }}" alt="bed">
                                <p class="m-0 mt-3 text">BedRoom Design</p>
                            </div>
                        </div>
                        <div class="col-3 py-2">
                            <div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/table.png') }}" alt="table">
                                <p class="m-0 mt-3 text">Table Design</p>
                            </div>
                        </div>
                        <div class="col-3 py-2">
                            <div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/wallpaper.png') }}" alt="wallpaper">
                                <p class="m-0 mt-3 text">Wallpaper Design</p>
                            </div>
                        </div>
                        <div class="col-3 py-2">
                            <div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/interior.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">Interior Design</p>
                            </div>
                        </div>
                        <div class="col-3 py-2">
                            <div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/bedroom.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">BedRoom Design</p>
                            </div>
                        </div>
                        <div class="col-3 py-2">
                            <div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/table.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">Table Design</p>
                            </div>
                        </div>
                        <div class="col-3 py-2">
                            <div class="box-service d-flex flex-column align-items-center justify-content-center">
                                <img class="image-service" src="{{ asset('assets/Images/Icon/wallpaper.png') }}" alt="interior">
                                <p class="m-0 mt-3 text">Wallpaper Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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


<div class="content-2">
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <p class="topic poppins-semibold mt-4"><span style="color:#E00000">Process</span> We Follow</p>
        <div class="d-flex justify-content-around align-items-center">
            <div class="circle-big d-flex flex-column align-items-center justify-content-center">
                <div class="circle-small">
                    <p class="m-0 opacity" style="color:white;font-size:30px">01</p>
                </div>
                <p class="m-0 text-center poppins-bold">Research Project</p>
                <p class="m-0 text-center poppins">Lorem askdan sadda dasdad</p>
            </div>
            <img class="p-4" src="{{ asset('assets/Images/Icon/arrow.png') }}" alt="arrow">
            <div class="circle-big d-flex flex-column align-items-center justify-content-center">
                <div class="circle-small">
                    <p class="m-0 opacity" style="color:white;font-size:30px">02</p>
                </div>
                <p class="m-0 text-center poppins-bold">Evaluate Plans</p>
                <p class="m-0 text-center poppins">Lorem askdan sadda dasdad</p>
            </div>
            <img class="p-4" src="{{ asset('assets/Images/Icon/arrow.png') }}" alt="arrow">
            <div class="circle-big d-flex flex-column align-items-center justify-content-center">
                <div class="circle-small">
                    <p class="m-0 opacity" style="color:white;font-size:30px">03</p>
                </div>
                <p class="m-0 text-center poppins-bold">Best Results</p>
                <p class="m-0 text-center poppins">Lorem askdan sadda dasdad</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-css')

@endsection