@extends('layouts.main')

@section('title')
    Home
@endsection

@section('container')

    <div class="mt-5" style="color: #354259">
        <h1><strong>What is TurboRent?</strong></h1>
        <h5 style="color: #354259">Turbo Rent is a vehicle rental application. In this application users can borrow and rent their vehicles.</h5><br>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div id="carouselExampleDark" class="carousel carousel-dark slide mt-4 w-75 h-50" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($vehicles as $vehicle)
                    <div class="carousel-item active">
                        <img src="/storage/carImage/{{ $vehicle->carImage }}" class="d-block w-100 rounded" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    
    
    <div class="mt-5 text-center" style="color: #354259">
        <h1><strong>Explore Cars Around You</strong></h1>
        <div class="d-flex justify-content-around">
            @foreach ($vehicles as $vehicle)
                <div class="card shadow mt-4" style="width: 18rem;">
                    <img src="/storage/carImage/{{ $vehicle->carImage }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="color: #354259">{{ $vehicle->carName }}</p>
                    </div>
                </div>
            @endforeach
            
            <div class="card shadow mt-4" style="width: 18rem;">
                <img src="https://s3-ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2021/04/30150018/toyota-raize-resmi-meluncur-eksterior-002.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="color: #354259">Toyota Raize</p>
                </div>
            </div>
            
        </div>
    </div>
    <br>
@endsection