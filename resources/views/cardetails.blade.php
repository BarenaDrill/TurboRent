@extends('layouts.main')

@section('container')
    <div class="d-flex">
        <div class="body0" style="display:flex; flex-direction:row ">
            <div class="body1">

            
        <div class="position-absolute start-0 flex-fill" style="background-color:#c2ded1; height:700px; width: 470px;">
            <div class="d-flex" style="width: 470px; height:50px; background-color:#e0f6eb;">
                <div class="flex-column">
                    <div class="mt-2 ms-5" style="">
                        <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" class="" style="width:30px; height:30px;" alt="...">
                    </div>
                </div>
                <div class="flex-column">

                    <div class="ms-3" style="margin-top:10px;">
                      <p class="card-text"><b>Hosted By {{ $user->name }}</b></p>
                    </div>
                </div>

            </div>

            {{-- @foreach ($cars as $car) --}}

            <div class="details" style="height:450px;">
            <div class="d-flex" style="height:120px;">

                <div class="flex-row" style="">
                    <div class="card-body ms-5 mt-4" style="width: 50px;">
                        @if($car->carType == "Manual")
                            <img src="{{ asset('storage\detail-icons\manual.png') }}" class="card-img-top" alt="...">
                            <div class="card-body" style="text-align: center">
                                <p class="card-text mt-1"><b>Manual</b></p>
                            </div>
                        @elseif($car->carType == "Automatic")
                        {{-- ini kalau mau pke gambar dari storage --}}
                            <img src="{{ asset('storage\detail-icons\automatic.png') }}" class="card-img-top" alt="...">
                            <div class="card-body" style="text-align: center">
                                <p class="card-text mt-1"><b>Automatic</b></p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="flex-row" style="">
                    <div class="card-body ms-5 mt-4" style="width: 50px;">
                        @if($car->fuelType == "Petrol")
                            <img src="https://cdn-icons-png.flaticon.com/512/2933/2933927.png" class="card-img-top" alt="...">
                            <div class="card-body" style="text-align: center">
                                <p class="card-text mt-1"><b>Petrol</b></p>
                            </div>
                        @elseif($car->fuelType == "Electric")
                            <img src="https://cdn-icons-png.flaticon.com/512/1144/1144371.png" class="card-img-top" alt="...">
                            <div class="card-body" style="text-align: center">
                                <p class="card-text mt-1"><b>Electric</b></p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="flex-row" style="">
                    <div class="card-body ms-5 mt-4" style="width: 50px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/6332/6332163.png" class="card-img-top" alt="...">
                        @if($car->seat == "2 Seater")
                            <div class="card-body" style="text-align: center">
                                <p class="card-text mt-1"><b>2 seater</b></p>
                              </div>
                        @elseif($car->seat == "4 Seater")
                            <div class="card-body" style="text-align: center">
                            <p class="card-text mt-1"><b>4 seater</b></p>
                          </div>
                        @elseif($car->seat == "6 Seater")
                          <div class="card-body" style="text-align: center">
                          <p class="card-text mt-1"><b>6 seater</b></p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="flex-row" style="">
                    <div class="card-body ms-5 mt-4" style="width: 50px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/4606/4606838.png" class="card-img-top" alt="...">
                        @if($car->wheelModel == "Front-Wheel Drive")
                            <div class="card-body" style="text-align: center">
                                <p class="card-text mt-1"><b>Front-Wheel</b></p>
                              </div>
                        @elseif($car->wheelModel == "Rear-Wheel Drive")
                            <div class="card-body" style="text-align: center">
                            <p class="card-text mt-1"><b>Rear-Wheel</b></p>
                          </div>
                        @elseif($car->wheelModel == "Four-Wheel Drive")
                          <div class="card-body" style="text-align: center">
                          <p class="card-text mt-1"><b>Four-Wheel</b></p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="d-flex" style="margin-top:1px; ">
                @if($car->bluetooth == "Available")
                <div class="flex-row" style="margin-top:10px;">
                    <div class="card-body ms-5 mt-4" style="width: 50px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/886/886581.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <p class="card-text mt-1"><b>Bluetooth</b></p>
                        </div>
                    </div>
                </div>
                @endif

                @if($car->aux == "Available")
                <div class="flex-row" style="margin-top:10px;">
                    <div class="card-body ms-5 mt-4" style="width: 50px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/5018/5018118.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <p class="card-text mt-1"><b>Aux</b></p>
                        </div>
                    </div>
                </div>
                @endif

                @if($car->childSeat== "Available")
                <div class="flex-row" style="margin-top:10px;">
                    <div class="card-body ms-5 mt-4" style="width: 50px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/6003/6003929.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <h6 class="card-text mt-1"><b>Child Seat</b></h6>
                        </div>
                    </div>
                </div>
                @endif

                @if($car->petFriendly== "Available")
                <div class="flex-row" style="margin-top:10px;">
                    <div class="card-body ms-5 mt-4" style="width: 50px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/489/489868.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <h6 class="card-text mt-1"><b>Pet Friendly</b></h6>
                        </div>
                    </div>
                </div>
                @endif

                
            </div>
            <div class="d-flex">
                @if($car->noSmoking== "Available")
                <div class="flex-row" style="margin-top:10px;">
                    <div class="card-body ms-5 mt-4" style="width: 50px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/2928/2928242.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <h6 class="card-text mt-1"><b>No Smoking</b></h6>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            </div>

            

            <div class="d-flex card-body" style="margin-top: 70px; background-color:#e0f6eb; padding-top:20px;">
                <div class="flex-column">
                    <h4 style="margin-top:5px; margin-left: 40px;"><b>Price : </h4>
                </div>
                <div class="flex-column">
                    <h5 style="margin-top:9px;color:#354259; margin-left: 10px;"> {{ number_format($car->price) }} </b> per day</h5>
                </div>
            </div>

            {{-- @endforeach --}}

            <div class="d-flex gap-4" style="justify-content: center; padding-top:20px; background-color:#e0f6eb; padding-bottom:38px;">

            <div class="d-flex gap-4" style="justify-content: center; margin-top:20px;">

                 <!-- Button trigger modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-align: center; background-color:#c2ded1; color:#354259">
                        <b>Book Now</b>
                    </button>
                    {{-- <button type="button" class="btn" href="/wishlist" style="text-align: center; background-color:#c2ded1; color:#354259">
                        <b>Add to wishlist</b>
                    </button> --}}

                <!-- Modal -->
                <form method="post" action="{{ url('cardetails',$car->id) }}">
                    @csrf
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background-color:#c2ded1; color:#354259">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><b>Booking</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="background-color:white; color:#354259">
                                    <div class="" style="">
                                        <label for="exampleInputPassword1" class="form-label"><b>Pick Up date</b></label>
                                        <input type="date" class="form-control" id="exampleInputDate"  name="pickupdate"style="background-color:aliceblue">
                                        <label for="exampleInputPassword1" class="form-label" ><b>End date</b></label>
                                        <input type="date" class="form-control" id="exampleInputDate"  name="enddate"style="background-color:aliceblue">
                                    </div>
                                </div>
                                <div class="modal-footer" style="background-color:white;">
                                   
                                        
                                        <button type="submit" class="btn" style="background-color:#c2ded1; color:#354259;"><b>Book</b></button>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="body2">

        <div class="content" style="display: flex; flex-direction:column;">
            <div class="carous">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide flex-fill w-65 mt-4" style="margin-left: 540px; justify-content:center; text-align:center;" data-bs-ride="false">
                    <h3  style="color:#354259; margin-bottom:20px;">{{ $car->carName }}</h3>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/storage/carImage/{{ $car->carImage }}"class="d-block " alt="..." style="height:320px; width:550px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="comments" style="margin-left:700px; margin-top:20px;">
                    <div class="col-sm-8">
                        <div class="card" style="background-color: #c2ded1">
                            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                @foreach ($comments as $comment)
                                <div class="carousel-inner">
                                    {{-- @foreach ($users as $user) --}}
                                        @if ($user->id == $comment->userID)
                                            @for ($i = 0; $i < $comment->count(); $i++)
                                            <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                                <div class="card-body" style="margin-left:35px;">
                                                    <h5 class="card-title">{{$user->name}}</h5>
                                                    <p class="card-text">{{$comment->comment}}</p>
                                                </div>
                                            </div>
                                            @endfor
                                        @endif
                                    {{-- @endforeach --}}
                                </div>
                                @endforeach
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection