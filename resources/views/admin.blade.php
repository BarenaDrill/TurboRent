@extends('layouts.main')
@section('title')
    Admin
@endsection
@section('container')
    <h2 class="card-title m-3 mt-3 mb-4" style="color: #354259;">Transaction's Validation</h2>
    
    @foreach ($transactions as $trc)
        {{-- {{ dd($trc) }} --}}
        {{ $trc->bookID }}
        <div class="shadow p-2 mb-2 rounded m-3" style="background-color: #c2ded1;">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <a href="/storage/{{ $trc->proofImage }}">
                        <img src="{{ asset('storage/' . $trc->proofImage) }}" style="height: 95px;" class="img-fluid rounded mt-1" alt="...">
                    </a>    
                    <div class="m-3">
                        {{-- {{ dd($users) }} --}}
                        @foreach ($users as $user)
                            @if ($user->id == $trc->userID)
                                <h5 class="card-title fs-4" style="color: #354259;">{{ $user->name }}</h5>
                            @endif
                        @endforeach
                    </div>
                </div>
                @foreach ($bookings as $book)
                    @if($book->id == $trc->bookID)
                    {{-- {{ dd($book) }} --}}
                        @if($book->status == 0)
                            <div class="m-2">
                                <form action="/orders/{{ $book->id }}" method="post">
                                    @csrf
                                    <button class="w-100 btn" type="submit" style="background-color: #354259; color: #c2ded1;">ACCEPT</button>
                                </form>    
                            </div>
                        @else
                            <div class="m-2">
                                <button class="w-100 btn" style="background-color: #ffffff; color: #354259;">FINISH</button>
                            </div>    
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    
@endsection