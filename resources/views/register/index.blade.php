@extends('layouts.blank')

@section('title')
    Register
@endsection

@section('container')

    <div class="text-center m-3 mt-5">
        <a class="navbar-brand" href="#"><img src="/img/logo.png" style="width:160px;"></a>
    </div>
    <main class="form-registration w-100 m-auto">
        <form class="rounded shadow p-4" style="width: 100%; background-color: #c2ded1;" action="/register" method="post" enctype="multipart/form-data">
            @csrf
            <div class="d-flex justify-content-around gap-3">
                <div style="width: 100%;">
                    <div class="form-floating">
                        <p class="mb-0 mt-2" style="color: #354259;"><b>Name</b></p>
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control rounded @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}">
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
                            <input type="email" name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
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
                            <input type="text" name="address" class="form-control rounded @error('address') is-invalid @enderror" id="address" required value="{{ old('address') }}">
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
                            <input type="text" name="phone" class="form-control rounded @error('phone') is-invalid @enderror" id="phone" required value="{{ old('phone') }}">
                        </div>  
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div style="width: 100%;">
                    <div class="form-floating">
                        <p class="mb-0 mt-2" style="color: #354259;"><b>KTP</b></p>
                        <div class="mb-3">
                            <input type="file" name="ktp" class="form-control rounded @error('ktp') is-invalid @enderror" id="ktp" required value="{{ old('ktp') }}">
                        </div>  
                        @error('ktp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <p class="mb-0 mt-2" style="color: #354259;"><b>Photo Profile</b></p>
                        <div class="mb-3">
                            <input type="file" name="profile" class="form-control rounded @error('profile') is-invalid @enderror" id="profile" required value="{{ old('profile') }}">
                        </div>  
                        @error('profile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <p class="mb-0 mt-2" style="color: #354259;"><b>Password</b></p>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control rounded @error('password') is-invalid @enderror" id="password" required>
                        </div>  
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <p class="mb-0 mt-2" style="color: #354259;"><b>Confirm Password</b></p>
                        <div class="mb-3">
                            <input type="password" name="confirmPassword" class="form-control rounded @error('confirmPassword') is-invalid @enderror" id="confirmPassword" required>
                        </div>  
                        @error('confirmPassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-between mt-3 gap-5">
                <small class="d-block text-center mt-3 mb-3"><a class="text-decoration-underline text-dark" href="/login">Already Registered?</a></small>
                <button class="btn text-white h-50" type="submit" style="background-color: #354259;">REGISTER</button>
            </div>
        </form>
    </main>    
    
@endsection