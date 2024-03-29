@extends('layouts.main')

@section('title')
    Orders
@endsection

@section('container')
    <div class="d-flex justify-content-center gap-5 mt-3">
        <div>
            <a class="nav-link" aria-current="page" href="/orders">
            <h5 style="color: #354259">PENDING</h5>
          </a>
        </div>
        <div>
            <a class="nav-link" aria-current="page" href="/completed">
            <h5 style="color: #354259">COMPLETED</h5>
          </a>
        </div>
    </div>

    @foreach ($bookings as $book)
        @if($book->userID == auth()->user()->id)
            @if($book->status == 1)
                <div class="shadow p-2 mb-2 rounded m-3" style="background-color: #c2ded1;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        @foreach ($cars as $car)
                            @if($car->id == $book->carID)
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/carImage/' . $car->carImage) }}" style="height: 95px;" alt="...">
                                    {{-- <img src="{{ asset('storage/' . $car->image) }}" style="height: 95px;" class="img-fluid rounded mt-1" alt="..."> --}}
                                    <div class="m-3">
                                        <h5 class="card-title fs-4" style="color: #354259;"><strong>{{ $car->carName }}</strong></h5>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        {{-- <div class="d-flex gap-1 m-2">
                            <div>
                                <button class="W-100 btn btn-dark float-end m-3" style="width:120px" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">COMMENTS</button>

                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">COMMENT</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-outline form-white mb-4">
                                                    <label class="form-label" for="comment_field">Comment</label>
                                                    <textarea type="comment" name="comment" id="comment_field" class="form-control form px-5-control-lg"></textarea>
                                                </div>
                                                <div class="form-outline form-white mb-4">
                                                    <label class="form-label" for="rate_field">Rate</label>
                                                    <input type="number" name="number" id="rate_field" class="form-control form px-5-control-lg">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="post" action="/completed">
                                                    @csrf
                                                    <button type="submit" class="btn btn-dark">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            @endif
        @endif
    @endforeach
@endsection