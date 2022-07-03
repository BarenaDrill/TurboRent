@extends('layouts.main')

@section('container')
    <div class="mt-5 d-flex justify-content-center gap-5">
        <div class="d-flex flex-column text-center mx-5">
            <a href="/wishlist" class="text-decoration-none">
                <img src="/img/heartIcon.png" width="150">
                <h2 style="color: #fcf0c8">WISHLIST</h2>
            </a>    
        </div>    
        <div class="d-flex flex-column text-center mx-5">
            <a href="/profile" class="text-decoration-none">
                <img src="/img/userIcon.png" width="150">
                <h2 style="color: #fcf0c8">PROFILE</h2>
            </a>    
        </div>    
    </div>    
    <div class="mt-5 d-flex justify-content-center gap-5">
        <div class="d-flex flex-column text-center mx-5">
            <a href="/income" class="text-decoration-none">
                <img src="/img/incomeIcon.png" width="150">
                <h2 style="color: #fcf0c8">INCOME</h2>
            </a>    
        </div>    
        <div class="d-flex flex-column text-center mx-5">
            <a href="/help" class="text-decoration-none">
                <img src="/img/helpIcon.png" width="150">
                <h2 style="color: #fcf0c8">HELP</h2>
            </a>    
        </div>    
    </div>    
@endsection