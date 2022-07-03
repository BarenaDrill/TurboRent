@extends('layouts.loading')

@section('container')

<div class="container-fluid py-5 d-flex justify-content-center ">
<div class="card text-center" style="width: 600px; height: 400px; background-color: #FCF0C8;">
    <div class="card-body">
        <form>
            <div class="mb-3" style="margin-top: 30px;">
                <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color: #FACE7F; margin-left:50px; margin-right: 50px; width:465px;">
            </div>
        
            <div class="mb-3" style="margin-top:40px; ">
                <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="background-color: #FACE7F; margin-left:50px; margin-right: 50px; width:465px;">
            </div>

            <div class="signupforgotpassword d-flex" style="justify-content:space-between; flex-direction:row; margin-left:50px; margin-right: 50px; margin-top:30px;">
                <div class="signup">
                    <a href="../register" style="font-size: small; text-decoration:none; color:black">Sign Up</a>
                </div>
                <div class="password">
                    <a href="../register" style="font-size: small; text-decoration:none; color:black">Forget Password</a>
                </div>
            </div>
        
            <button type="submit mb-5" class="btn" style="background-color: #630A10; color:#FCF0C8; width:150px; margin-top:35px;">Login</button>
        </form>
    </div>
</div>
</div>
@endsection