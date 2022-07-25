@extends('layouts.main')

@section('title')
    Home
@endsection

@section('container')

    <div class="mt-5" style="">
        <h1><strong>What is TurboRent?</strong></h1>
        <h5 style="">Turbo Rent is a vehicle rental application. Now is the time to get in the automotive industy. With TurboRent taking millions of cars off the road there has never been a better time to get started! Renting and being a renter has never been this easy.</h5><br>
    </div>

    <div class="container-fluid d-flex justify-content-center">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/storage/slider/slider1.jpg" class="d-block w-100 rounded" alt="...">
                </div>
                @for ($i = 2 ; $i <= 6 ; $i++)
                    <div class="carousel-item">
                        <img src="/storage/slider/slider{{ $i }}.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                @endfor
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    
    
    <div class="mt-5 text-center" style="color: #354259">
        <h1><strong>Explore Cars Around You</strong></h1>
        <div class="d-flex justify-content-around">
            <div class="mt-3 row">
                <div class="row row-cols-1 row-cols-md-3">
                    @foreach ($vehicles->take(3) as $vehicle)
                        <a href="/cardetails/{{ $vehicle->id }}"> 
                            <div class="col mb-4">
                                <div class="card h-100 shadow">
                                    <div class="" style="">
                                        <img src="/storage/carImage/{{ $vehicle->carImage }}" alt="..." class="img-fluid" style="height: 200px; width:300px">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #354259;"><strong>{{ $vehicle->carName }}</strong></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>  
            </div>
        </div>
    </div>
    <br>
@endsection