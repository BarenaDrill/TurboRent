@extends('layouts.main')

@section('title')
    Profile
@endsection

@section('container')

    
    {{-- <div class="m-4">
        <img class="rounded-circle z-depth-2 shadow" width="170px" src="https://avatars.githubusercontent.com/u/1071625?v=4" data-holder-rendered="true">
    </div>    --}}

    <div class="mt-4">
        <img class="rounded z-depth-2 shadow" width="150px" src="{{ asset('storage/' . auth()->user()->profile) }}">
        <div class="d-flex justify-content-between">
            <div style="width:500px;">
                <h4 class="mt-2">Name</h4>
                <div class="rounded p-1 row align-items-center mx-0 shadow" style="background-color: #c2ded1;">
                    <div class="col">{{ auth()->user()->name }}</div>
                </div>
                <h4 class="mt-2">Email</h4>
                <div class="rounded p-1 row align-items-center mx-0 shadow" style="background-color: #c2ded1;">
                    <div class="col">{{ auth()->user()->email }}</div>
                </div>
                <h4 class="mt-2">Address</h4>
                <div class="rounded p-1 row align-items-center mx-0 shadow" style="background-color: #c2ded1;">
                    <div class="col">{{ auth()->user()->address }}</div>
                </div>
                <h4 class="mt-2">Phone Number</h4>
                <div class="rounded p-1 row align-items-center mx-0 shadow" style="background-color: #c2ded1;">
                    <div class="col">{{ auth()->user()->phone }}</div>
                </div>
            </div>    
            <div style="width:500px;">
                <h4 class="mt-2">Password</h4>
                <div class="rounded p-1 row align-items-center mx-0 shadow" style="background-color: #c2ded1;">
                    <div class="col">*********</div>
                </div>
                <h4 class="mt-2">KTP</h4>
                <div>
                    <a href="#">
                        <img src="https://disdukcapil.cilacapkab.go.id/upaaaaa/2022/02/ktp.jpg" style="width:200px;">
                    </a>
                </div>
                <br>
                <div class="mt-1">
                    <a href="#" class="text-decoration-none p-2 px-5 text-white rounded" style="background-color: #354259;">UPDATE</a>
                </div>
            </div>    
        </div>

    </div>
@endsection