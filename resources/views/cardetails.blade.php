@extends('layouts.main')

@section('container')
    <div class="d-flex">
        <div class="position-absolute start-0 flex-fill" style="background-color:#fcf0c8; height:100%; width: 460px;">
            <div class="d-flex" style="width: 460px; height:80px; background-color:#BBB396;">
                <div class="flex-column">
                    <div class="mt-3 ms-5" style="">
                        <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" class="" style="width:40px; height:40px;" alt="...">
                    </div>
                </div>
                <div class="flex-column">
                    <div class="mt-4 ms-3" style="">
                      <p class="card-text"><b>Hosted By Lorem Ipsum</b></p>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="flex-row">
                    <div class="card-body ms-5 mt-5" style="width: 90px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/6332/6332163.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <p class="card-text mt-1"><b>4+ seater</b></p>
                        </div>
                    </div>
                </div>

                <div class="flex-row">
                    <div class="card-body ms-5 mt-5" style="width: 90px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/2933/2933927.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <p class="card-text mt-1"><b>Petrol 95</b></p>
                        </div>
                    </div>
                </div>

                <div class="flex-row">
                    <div class="card-body ms-5 mt-5" style="width: 90px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/7619/7619108.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <p class="card-text mt-1"><b>Matic</b></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex">
                <div class="flex-row">
                    <div class="card-body ms-5 mt-5" style="width: 90px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/2928/2928242.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <h6 class="card-text mt-1"><b>No Smoking</b></h6>
                        </div>
                    </div>
                </div>
    
                <div class="flex-row">
                    <div class="card-body ms-5 mt-5" style="width: 90px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/886/886581.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <p class="card-text mt-1"><b>Bluetooth</b></p>
                        </div>
                    </div>
                </div>

                <div class="flex-row">
                    <div class="card-body ms-5 mt-5" style="width: 90px;">
                        <img src="https://cdn-icons-png.flaticon.com/512/6003/6003929.png" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center">
                          <p class="card-text mt-1"><b>Child Seat</b></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex card-body text-bg-light" style="margin-top: 50px;">
                <div class="flex-column">
                    <h4 style="margin-top:5px; margin-left: 40px;"><b>Price : </h4>
                </div>
                <div class="flex-column">
                    <h5 style="margin-top:9px;color:#630A10; margin-left: 10px;"> Rp.595.000 </b> per day</h5>
                </div>
            </div>

            <div class="d-flex gap-4" style="justify-content: center; margin-top:20px;">
                 <!-- Button trigger modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-align: center; background-color:#911F27; color:#fcf0c8">
                        Book Now
                    </button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-align: center; background-color:#911F27; color:#fcf0c8">
                        Add to wishlist
                    </button>
  
                <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background-color:#911F27; color:#BBB396">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Booking</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="background-color:#BBB396; color:#911F27">
                                    <div class="" style="">
                                        <label for="exampleInputPassword1" class="form-label"><b>Pick Up date</b></label>
                                        <input type="date" class="form-control" id="exampleInputDate" style="background-color:aliceblue">
                                        <label for="exampleInputPassword1" class="form-label"><b>End date</b></label>
                                        <input type="date" class="form-control" id="exampleInputDate" style="background-color:aliceblue">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn" style="background-color:#BBB396; color:#911F27"><b>Book</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
  
        </div>

        <div class="content" style="display: flex; flex-direction:column;">
            <div class="carous">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide flex-fill w-65 mt-4" style="margin-left: 470px; justify-content:center; text-align:center;" data-bs-ride="false">
                    <h3  style="color:#fcf0c8; margin-bottom:20px;">HONDA HR-V 2022</h3>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://media.suara.com/pictures/653x366/2022/03/23/20706-all-new-honda-hr-v-2022-01.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://media.suara.com/pictures/653x366/2022/03/23/26533-all-new-honda-hr-v-2022-02.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev w-5" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next w-5" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
            <div class="comments" style="margin-left:470px; margin-top:20px;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card text-center" style="height: 250px; background-color: #fcf0c8">
                            <div class="card-body">
                                <div class="form-floating">
                                    <div>
                                        <label class="form-label" for="comment_field">Comment</label>
                                        <textarea type="comment" name="comment" id="comment_field" class="form-control form px-5-control-lg"></textarea>
                                    </div>
                                    <div>
                                        <label class="form-label" for="rate_field">Rate</label>
                                        <input type="number" name="rate" id="rate_field" class="form-control form px-5-control-lg">
                                    </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn" style="background-color:#911F27; color:#fcf0c8; margin-top: 7px;">Submit</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-sm-6">
                        <div class="card" style="background-color: #fcf0c8">
                            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                @foreach ($comments as $comment)
                                <div class="carousel-inner">
                                    @for ($i = 0; $i < $comment->count(); $i++)
                                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                            <div class="card-body" style="margin-left:35px;">
                                                <h5 class="card-title">test</h5>
                                                <p class="card-text">{{$comment->comment}}</p>
                                            </div>
                                        </div>
                                    @endfor
                                  {{--<div class="carousel-item active">
                                    <div class="card-body" style="margin-left:35px;">
                                        <h5 class="card-title">Users #1</h5>
                                        <p class="card-text">Nice car!</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="card-body" style="margin-left:35px;">
                                        <h5 class="card-title">Users #2</h5>
                                        <p class="card-text">Affordable!</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="card-body" style="margin-left:35px;">
                                        <h5 class="card-title">Users #3</h5>
                                        <p class="card-text">Good host!</p>
                                    </div>
                                  </div>--}}
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
@endsection