@extends('layouts.main')

@section('container')
    <div class="row mt-4 justify-content-center">
        <div class="col-md-12">
            <form action="/searchGame">
                <div class="d-flex gap-1 mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <button class="btn text-white" style="background-color: #354259" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-3 row">
        {{-- TINGGAL LOOPING SEMUA CAR DISINI --}}
        @foreach ($vehicles as $vehicle)
            <div class="col-md-3 mb-4">
                <div class="card shadow">
                    <img src="/storage/carImage/{{ $vehicle->carImage }}" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #354259;"><strong>{{ $vehicle->carName }}</strong></h5>
                        <p class="card-text" style="color: #354259;">IDR {{ number_format($vehicle->price) }}</p>
                    </div>
                        <a href="/cardetails/{{ $vehicle->id }}" style="background-color: #c2ded1; color: #354259;" class="btn m-1">DETAIL</a>
                </div>
            </div>
        @endforeach
        
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <img src="https://imgcdnblog.carbay.com/wp-content/uploads/2021/01/18122812/Toyota-Rush_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: #354259;"><strong>Car Name</strong></h5>
                    <p class="card-text" style="color: #354259;">IDR 300.000</p>
                </div>
                    <a href="/cardetails" style="background-color: #c2ded1; color: #354259;" class="btn m-1">DETAIL</a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <img src="https://imgcdnblog.carbay.com/wp-content/uploads/2021/01/18122812/Toyota-Rush_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: #354259;"><strong>Car Name</strong></h5>
                    <p class="card-text" style="color: #354259;">IDR 300.000</p>
                </div>
                    <a href="/cardetails" style="background-color: #c2ded1; color: #354259;" class="btn m-1">DETAIL</a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <img src="https://imgcdnblog.carbay.com/wp-content/uploads/2021/01/18122812/Toyota-Rush_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: #354259;"><strong>Car Name</strong></h5>
                    <p class="card-text" style="color: #354259;">IDR 300.000</p>
                </div>
                    <a href="/cardetails" style="background-color: #c2ded1; color: #354259;" class="btn m-1">DETAIL</a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <img src="https://imgcdnblog.carbay.com/wp-content/uploads/2021/01/18122812/Toyota-Rush_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: #354259;"><strong>Car Name</strong></h5>
                    <p class="card-text" style="color: #354259;">IDR 300.000</p>
                </div>
                    <a href="/cardetails" style="background-color: #c2ded1; color: #354259;" class="btn m-1">DETAIL</a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <img src="https://imgcdnblog.carbay.com/wp-content/uploads/2021/01/18122812/Toyota-Rush_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: #354259;"><strong>Car Name</strong></h5>
                    <p class="card-text" style="color: #354259;">IDR 300.000</p>
                </div>
                    <a href="/cardetails" style="background-color: #c2ded1; color: #354259;" class="btn m-1">DETAIL</a>
            </div>
        </div>
    </div>
@endsection