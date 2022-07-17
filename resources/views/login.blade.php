@extends('layouts.blank')

@section('container')

{{-- <h3 class="text-center mt-4"><strong>LOGIN</strong></h3> --}}
<div class="text-center m-3 mt-5">
    <a class="navbar-brand" href="/"><img src="/img/logo.png" style="width:160px;"></a>
</div>
<div class="container-fluid d-flex justify-content-center ">
<div class="rounded shadow text-center" style="width: 400px; height: 350px; background-color: #c2ded1;">
    <div class="card-body mt-4">
        <form action="/" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color: #354259;"><b>Email address</b></label>
                <input type="email" class="form-control align-item-center" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:#f3f3f3; margin-left:45px; margin-right: 50px; width:300px;">
            </div>
        
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: #354259;"><b>Password</b></label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="background-color:#f3f3f3; margin-left:45px; margin-right: 50px; width:300px;">
            </div>

            <div class="signupforgotpassword d-flex" style="justify-content:space-between; flex-direction:row; margin-left:50px; margin-right: 50px;">
                <div class="signup">
                    <a href="../register" style="font-size: small; text-decoration:none; color:black">Sign Up</a>
                </div>
                <div class="password">
                    <a href="../register" style="font-size: small; text-decoration:none; color:black">Forget Password</a>
                </div>
            </div>
        
            <button type="submit mb-5" class="btn text-white" style="background-color: #354259; width:150px; margin-top:35px;">Login</button>
        </form>
    </div>
</div>
</div>
@endsection