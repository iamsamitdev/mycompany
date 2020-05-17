<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.master_template')
@section('title') Home @endsection
@section('content')
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
        <img src="{{asset('assets/images/slide1.jpg')}}" class="img-fluid" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slide2.jpg')}}" class="img-fluid" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slide3.jpg')}}" class="img-fluid" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-success"></i>
            <h1>Home</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi enim magnam, ex provident doloribus reprehenderit doloremque tenetur pariatur temporibus quisquam excepturi. Totam iusto aliquam nostrum praesentium soluta laudantium quibusdam. Accusamus!</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-concierge-bell fa-3x text-warning"></i>
            <h1>About us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis nisi cumque nesciunt sed beatae hic magni modi laboriosam ullam quam doloremque tempore commodi maiores, fugiat, porro necessitatibus debitis placeat?</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-cloud-showers-heavy fa-3x text-danger"></i>
            <h1>Services</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sequi hic aliquam magni odio accusantium vero numquam quo labore odit? Totam, eius. Aperiam sapiente, eius accusantium distinctio tempore iure minima.</p>
        </div>
    </div>
</div>

@endsection