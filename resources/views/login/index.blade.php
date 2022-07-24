@extends('layouts.blank')

@section('title')
    Login
@endsection

@section('container')
    <div class="text-center m-3 mt-5">
        <a class="navbar-brand" href="/"><img src="/img/logo.png" style="width:160px;"></a>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid d-flex justify-content-center ">
        <div class="rounded shadow text-center" style="width: 400px; height: 350px; background-color: #c2ded1;">
            <div class="card-body mt-4">
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: #354259;"><b>Email address</b></label>
                        <input type="email" class="form-control align-item-center" id="email" name="email" style="background-color:#f3f3f3; margin-left:45px; margin-right: 50px; width:300px;">
                    </div>
                
                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: #354259;"><b>Password</b></label>
                        <input type="password" class="form-control" id="password" name="password" style="background-color:#f3f3f3; margin-left:45px; margin-right: 50px; width:300px;">
                    </div>

                    <div class="signupforgotpassword d-flex" style="justify-content:space-between; flex-direction:row; margin-left:50px; margin-right: 50px;">
                        <div class="signup">
                            <a href="../register" style="font-size: small; text-decoration:none; color:black">Register</a>
                        </div>
                        {{-- <div class="password">
                            <a href="../register" style="font-size: small; text-decoration:none; color:black">Forget Password</a>
                        </div> --}}
                    </div>
                
                    <button type="submit mb-5" class="btn text-white" style="background-color: #354259; width:150px; margin-top:35px;">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection