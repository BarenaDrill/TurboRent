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
        <div class="card card-body text-black p-5" style="border-radius: 1rem; background: #c2ded1;" >
            <form action="/register-process" method="post" class="mb-md-5 px-5">
                @csrf
                <h2 class="fw-bold mb-5 text-uppercase text-center">Register</h2>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="name_field">Name</label>
                    <input type="name" name="name" id="name_field" class="form-control form px-5-control-lg">
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="address_field">Address</label>
                    <textarea type="address" name="address" id="address_field" class="form-control form px-5-control-lg"></textarea>
                </div>

                {{-- Masih Ragu input date --}}
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="birthday_field">Birthday</label>
                    <input type="date" name="birthday" id="birthday_field" class="form-control form px-5-control-lg">
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="email_field">Email</label>
                    <input type="email" name="email" id="email_field" class="form-control form px-5-control-lg">
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="NIK_field">NIK</label>
                    <input type="NIK" name="NIK" id="NIK_field" class="form-control form px-5-control-lg">
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="KTP_field">KTP image</label>
                    <input type="file" name="KTP" id="KTP_field" class="form-control form px-5-control-lg" enctype="multipart/form-data">
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="phone_field">Phone Number</label>
                    <input type="phone" name="phone" id="phone_field" class="form-control form px-5-control-lg">
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="profile_field">Photo Profile</label>
                    <input type="file" name="profile" id="profile_field" class="form-control form px-5-control-lg" enctype="multipart/form-data">
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="password_field">Password</label>
                    <input type="password" name="password" id="password_field" class="form-control form px-5-control-lg">
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="cPassword_field">Confirm Password</label>
                    <input type="password" name="cPassword" id="cPassword_field" class="form-control form px-5-control-lg">
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
