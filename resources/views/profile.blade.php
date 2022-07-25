@extends('layouts.main')

@section('title')
    Profile
@endsection

@section('container')

    
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-3 mt-2" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <h2 class="card-title m-3 mt-3 mb-4" style="color: #354259;">Profile</h2>
    <form action="/profile/{{ auth()->user()->id }}" method="post" class="mt-5">
        @csrf
        <div class="mt-4 m-3">
            <img class="rounded z-depth-2 shadow mt-2" width="200px" src="{{ asset('storage/' . auth()->user()->profile) }}">
            <div class="d-flex justify-content-between">
                <div style="width:500px;">
                    <div class="form-floating">
                        <p class="mb-0 mt-2" style="color: #354259;"><b>Name</b></p>
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control rounded @error('name') is-invalid @enderror" id="name" required value="{{ auth()->user()->name }}">
                        </div>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <p class="mb-0 mt-2" style="color: #354259;"><b>Email</b></p>
                        <div class="mb-3">
                            <input type="text" name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" required value="{{ auth()->user()->email }}">
                        </div>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <p class="mb-0 mt-2" style="color: #354259;"><b>Address</b></p>
                        <div class="mb-3">
                            <input type="text" name="address" class="form-control rounded @error('address') is-invalid @enderror" id="address" required value="{{ auth()->user()->address }}">
                        </div>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <p class="mb-0 mt-2" style="color: #354259;"><b>Phone Number</b></p>
                        <div class="mb-3">
                            <input type="text" name="phone" class="form-control rounded @error('phone') is-invalid @enderror" id="phone" required value="{{ auth()->user()->phone }}">
                        </div>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>    
                <div style="width:500px;">
                    {{-- <div class="form-floating">
                        <p class="mb-0 mt-2" style="color: #354259;"><b>Password</b></p>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control rounded @error('password') is-invalid @enderror" id="password" required value="{{ auth()->user()->password }}">
                        </div>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <h4 class="mt-2">KTP</h4>
                    <div>
                        <a href="/storage/{{ auth()->user()->ktp }}">
                            <img src="{{ asset('storage/' . auth()->user()->ktp) }}" style="width:200px;">
                        </a>
                    </div>
                    <br>
                    <br>
                    {{-- <br> --}}
                    {{-- <div class="mt-1"> --}}
                        {{-- <a href="#" class="text-decoration-none p-2 px-5 text-white rounded" style="background-color: #354259;">UPDATE</a> --}}
                        {{-- <button type="submit" class="p-1 px-5 text-white rounded" style="background-color: #354259;">UPDATE</button> --}}
                    {{-- </div> --}}
                </div>    
            </div>

        </div>
    </form>    
@endsection