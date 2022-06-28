@extends('layouts.main')

@section('container')
    <h4 class="card-title m-3" style="color: #fcf0c8;">Your Wishlist</h4>

    {{-- TINGGAL LOOPING TABLE WISHLIST --}}
    <div class="shadow p-2 mb-2 rounded m-3" style="background-color: #fcf0c8;">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="d-flex">
                <img src="https://akcdn.detik.net.id/visual/2019/02/28/a02dae3a-28ca-49ce-8596-2f165188872f_169.jpeg?w=650" style="height: 90px;" class="img-fluid rounded" alt="...">
                <div class="m-3">
                    <h5 class="card-title">Car Name</h5>
                    <a href="#" class="text-decoration-none">
                        <p class="card-text text-primary"><small>Detail</small></p>
                    </a>
                </div>
            </div>
            <div class="m-2">
                <p class="mb-1">IDR 159.000</p>
                <button class="w-100 btn" type="submit" style="background-color: #630a10; color: #fcf0c8;">REMOVE</button>
            </div>
        </div>
    </div>
    <div class="shadow p-2 mb-2 rounded m-3" style="background-color: #fcf0c8;">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="d-flex">
                <img src="https://akcdn.detik.net.id/visual/2019/02/28/a02dae3a-28ca-49ce-8596-2f165188872f_169.jpeg?w=650" style="height: 90px;" class="img-fluid rounded" alt="...">
                <div class="m-3">
                    <h5 class="card-title">Car Name</h5>
                    <a href="#" class="text-decoration-none">
                        <p class="card-text text-primary"><small>Detail</small></p>
                    </a>
                </div>
            </div>
            <div class="m-2">
                <p class="mb-1">IDR 159.000</p>
                <button class="w-100 btn" type="submit" style="background-color: #630a10; color: #fcf0c8;">REMOVE</button>
            </div>
        </div>
    </div>
@endsection