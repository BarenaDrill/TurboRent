@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center">
        <div class="card shadow m-3" style="width: 18rem; background-color: #fcf0c8">
            <div class="card-body">
                <h4 class="card-title"><strong>THIS WEEK</strong></h4>
                <p class="card-text">IDR 2.000.000</p>
                <a href="#" class="btn btn-dark">Detail</a>
            </div>
        </div>
    </div>  

    <h2 class="mt-3 mb-4" style="color: #fcf0c8">Detail Income Per Week</h2>
    <table class="table table-bordered border-dark text-dark" style="background-color: #fcf0c8;">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Date</th>
            <th scope="col">Income</th>
            <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>23/06/2022</td>
                <td>IDR 3.000.000</td>
                <td><a href="#">Detail</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>30/06/2022</td>
                <td>IDR 2.500.000</td>
                <td><a href="#">Detail</a></td>
            </tr>
        </tbody>
    </table>
@endsection