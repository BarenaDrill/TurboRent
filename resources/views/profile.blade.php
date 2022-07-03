@extends('layouts.main')

@section('container')
    <div class="text-center m-4">
        <img class="rounded-circle z-depth-2 shadow" width="100" src="https://avatars.githubusercontent.com/u/1071625?v=4" data-holder-rendered="true">
        <h5 class="mt-2 fs-4" style="color:#fcf0c8"><strong>MY NAME</h5>
    </div>   

    <div class="d-flex justify-content-center">
        <div class="rounded shadow" style="width:700px; background-color: #fcf0c8">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="m-3">
                        <h5 class="card-title">NAME</h5>
                        <p class="card-text"><small class="text-muted">My Name</small></p>
                    </div>
                </div>
                <div class="m-2 text-center">
                    <form action="#" method="post">
                        @csrf
                        @method('delete')
                        <button class="w-100 btn btn-dark" type="submit">Edit</button>
                    </form>   
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="m-3">
                        <h5 class="card-title">ADDRESS</h5>
                        <p class="card-text"><small class="text-muted">My Address</small></p>
                    </div>
                </div>
                <div class="m-2 text-center">
                    <form action="#" method="post">
                        @csrf
                        @method('delete')
                        <button class="w-100 btn btn-dark" type="submit">Edit</button>
                    </form>   
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="m-3">
                        <h5 class="card-title">EMAIL</h5>
                        <p class="card-text"><small class="text-muted">My Email</small></p>
                    </div>
                </div>
                <div class="m-2 text-center">
                    <form action="#" method="post">
                        @csrf
                        @method('delete')
                        <button class="w-100 btn btn-dark" type="submit">Edit</button>
                    </form>   
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="m-3">
                        <h5 class="card-title">PASSWORD</h5>
                        <p class="card-text"><small class="text-muted">********</small></p>
                    </div>
                </div>
                <div class="m-2 text-center">
                    <form action="#" method="post">
                        @csrf
                        @method('delete')
                        <button class="w-100 btn btn-dark" type="submit">Change</button>
                    </form>   
                </div>
            </div>
        </div>
    </div>    
@endsection