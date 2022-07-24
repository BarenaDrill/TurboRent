@extends('layouts.main')
@section('title')
    Admin
@endsection
@section('container')
    <h2 class="card-title m-3 mt-3 mb-4" style="color: #354259;">Transaction's Validation</h2>

    <div class="shadow p-2 mb-2 rounded m-3" style="background-color: #c2ded1;">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="d-flex align-items-center">
                <a href="#">
                    <img src="https://hootcomedy.com/wp-content/uploads/2020/03/bukti-transaksi.jpg" style="height: 95px;" class="img-fluid rounded mt-1" alt="...">
                </a>    
                <div class="m-3">
                    <h5 class="card-title fs-4" style="color: #354259;">User Name</h5>
                </div>
            </div>
            <div class="m-2">
                <button class="w-100 btn" type="submit" style="background-color: #354259; color: #c2ded1;">ACCEPT</button>
            </div>
        </div>
    </div>
    
@endsection