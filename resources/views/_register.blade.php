@extends('layouts.blank')

@section('title')
    Register
@endsection

@section('container')
    {{-- kyknya g perlu yg ini de soalny di atas dh ada logo --}}
    {{-- <div class="text-center">
        <img src="/img/logo.png" style="width:160px;">
    </div> --}}
    <div class="container-fluid py-5 d-flex justify-content-center ">
        <div class="card card-body text-black p-5" style="border-radius: 1rem; background: #c2ded1;">

            <form action="/register" method="post" class="mb-md-5 px-5" enctype="multipart/form-data">
                @csrf
                <h2 class="fw-bold mb-5 text-uppercase text-center">Register</h2>

                {{-- NAME --}}
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control form px-5-control-lg @error('name') is-invalid @enderror" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- ADDRESS --}}
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control form px-5-control-lg @error('address') is-invalid @enderror">
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- BIRTHDATE --}}
                {{-- <div class="form-outline form-white mb-4">
                    <label class="form-label" for="birthdate">Birthdate</label>
                    <input type="date" name="birthdate" id="birthdate" class="form-control form px-5-control-lg @error('birthdate') is-invalid @enderror">
                    @error('birthdate')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}

                {{-- EMAIL --}}
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control form px-5-control-lg @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- NIK --}}
                {{-- <div class="form-outline form-white mb-4">
                    <label class="form-label" for="nik">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control form px-5-control-lg @error('nik') is-invalid @enderror">
                    @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}

                {{-- KTP --}}
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="ktp">KTP image</label>
                    <input type="file" name="ktp" id="ktp" class="form-control form px-5-control-lg @error('ktp') is-invalid @enderror">
                    @error('ktp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- PHONE --}}
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control form px-5-control-lg @error('phone') is-invalid @enderror">
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- PROFILE --}}
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="profile">Photo Profile</label>
                    <input type="file" name="profile" id="profile" class="form-control form px-5-control-lg @error('profile') is-invalid @enderror">
                    @error('profile')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                {{-- PASSWORD --}}
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form px-5-control-lg @error('password') is-invalid @enderror">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- CONFIRM PASSWORD --}}
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" class="form-control form px-5-control-lg @error('confirmPassword') is-invalid @enderror">
                    @error('confirmPassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex flex-row justify-content-evenly align-items-end mt-5">
                    <p class="mb-0">
                        Already registered?
                        <a href="/login" class="text-black fw-bold"> Login here!</a>
                    </p>
                    <button class="btn btn-outline-dark btn-lg px-3" type="submit">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
@endsection
