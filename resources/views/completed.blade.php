@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center gap-5 mt-3">
        <div>
            <a class="nav-link" aria-current="page" href="/orders">
            <h5 style="color: #354259">PENDING</h5>
          </a>
        </div>
        <div>
            <a class="nav-link" aria-current="page" href="/completed">
            <h5 style="color: #354259">COMPLETED</h5>
          </a>
        </div>
    </div>

    <div class="shadow p-2 mb-2 rounded m-3" style="background-color: #c2ded1;">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="d-flex align-items-center">
                <img src="https://akcdn.detik.net.id/visual/2019/02/28/a02dae3a-28ca-49ce-8596-2f165188872f_169.jpeg?w=650" style="height: 95px;" class="img-fluid rounded mt-1" alt="...">
                <div class="m-3">
                    <h5 class="card-title fs-4" style="color: #354259;"><strong>Car Name</strong></h5>
                </div>
            </div>
            <div class="d-flex gap-1 m-2">
                <div>
                    <button class="w-100 btn" type="submit" style="background-color: #354259; color: #c2ded1;">COMMENTS</button>
                </div>   
            </div>
        </div>
    </div>
@endsection