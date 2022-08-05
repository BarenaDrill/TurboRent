@extends('layouts.main')

@section('title')
    Car Detail
@endsection

@section('container')
    {{-- <div class="row mt-4 justify-content-center">
        <div class="col-md-12">
            <form action="/searchGame">
                <div class="d-flex gap-1 mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <button class="btn text-white" style="background-color: #354259" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div> --}}

    <div class="mt-5 row">
        <div class="row row-cols-1 row-cols-md-4">
            @foreach ($vehicles as $vehicle)
                <div class="col mb-4">
                    <div class="card h-100 shadow">
                        <div class="" style="">
                            <img src="/storage/carImage/{{ $vehicle->carImage }}" alt="..." class="img-fluid" style="height: 200px; width:100%">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color: #354259;"><strong>{{ $vehicle->carName }}</strong></h5>
                            <p class="card-text" style="color: #354259;">IDR {{ number_format($vehicle->price) }}</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="/cardetails/{{ $vehicle->id }}" style="background-color: #c2ded1; color: #354259;" class="btn m-1 w-100">DETAIL</a>
                        </div>
                    </div>
                </div>
            @endforeach
                
        {{-- TINGGAL LOOPING SEMUA CAR DISINI --}}
        

@endsection