@extends('layouts.main')

@section('container')
    <h2 class="card-title m-3 mt-3 mb-4" style="color: #354259;">Your Wishlist</h2>

    {{-- TINGGAL LOOPING TABLE WISHLIST --}}
    @foreach ($wish as $w)
        @if ($w->userID == auth()->user()->id)
        <div class="shadow p-2 mb-2 rounded m-3" style="background-color: #c2ded1;">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <img src="https://akcdn.detik.net.id/visual/2019/02/28/a02dae3a-28ca-49ce-8596-2f165188872f_169.jpeg?w=650" style="height: 95px;" class="img-fluid rounded mt-1" alt="...">
                    <div class="m-3">
                        <h5 class="card-title fs-4" style="color: #354259;"><strong>Car Name</strong></h5>
                        <a href="/cardetails" class="text-decoration-none">
                            <p class="card-text text-primary"><small>Detail</small></p>
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <p class="mb-1" style="color: #354259;"><strong>IDR 159.000</strong></p>
                    <button class="w-100 btn" type="submit" style="background-color: #354259; color: #c2ded1;">REMOVE</button>
                </div>
            </div>
        </div>
        @endif

    @endforeach
    
    
@endsection