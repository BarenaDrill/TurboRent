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

    {{-- {{ dd($bookings) }} --}}
    @foreach ($bookings as $book)
        @if ($book->userID == auth()->user()->id)
            <div class="shadow p-2 mb-2 rounded m-3" style="background-color: #c2ded1;">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    @foreach ($cars as $car)
                        @if($car->id == $book->carID)
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/carImage/' . $car->carImage) }}" style="height: 95px;" alt="...">
                                <div class="m-3">
                                    <h5 class="card-title fs-4" style="color: #354259;"><strong>{{ $car->carName }}</strong></h5>
                                    Total: {{ $book->total }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @if($book->status == 0)
                                <div class="d-flex gap-1 m-2">
                                    <div>
                                        <button class="w-100 btn btn-danger" type="submit" style="color: #c2ded1;">CANCEL</button>
                                    </div>
                                    <div>
                                        <button class="W-100 btn" style="background-color: #354259; color: #c2ded1;" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">PAY</button>
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form method="post" action="{{ url('transaction', $book->id) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">TRANSACTION RECEIPT</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-outline form-white mb-4">
                                                                <label class="form-label" for="receipt_field">Transfer to BCA - 6048365823</label>
                                                                <input type="file" name="proofImage" id="proofImage" class="form-control form px-5-control-lg">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                                <button type="submit" class="btn btn-dark">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    @endif    
                </div>
            </div>
        @endif
    @endforeach
        
@endsection