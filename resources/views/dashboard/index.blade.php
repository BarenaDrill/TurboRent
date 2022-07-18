@extends('dashboard.main')

@section('container')
    <div class="d-flex mt-3 align-items-center justify-content-between">
        <h2>My Vehicles</h2>
        <a class="nav-link" aria-current="page" href="/dashboard/carManager/addVehicle">
            <h5>
               + Add Vehicle
            </h5>
         </a>
    </div>
    <div class="row my-5 ">
        <div class="col-sm-6">
           <div class="card" style="height: 550px">
              <div class="card-body">
                 <h5 class="card-title ">
                    <span class="align-middle" style="height: 25px; width: 25px; background-color: #CC2727; border-radius: 50%; display: inline-block;"></span>
                    <span class="align-middle"> Booked</span>
                 </h5>
                 <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png" class="d-block img-fluid" style="height : 300px ;" alt="..." >
                 <p class="card-text">
                    <h5 class="text-center">
                       Car Name
                    </h5>
                 </p>
                 <p class="card-text">
                    <h5 class="text-center">
                       Price
                    </h5>
                 </p>
                 <p class="card-text">
                    <h5 class="text-center">
                       Rating
                    </h5>
                 </p>
                 <a href="/cardetails" class="float-end"><button type="button" class="btn btn-dark">Detail</button></a>
              </div>
           </div>
        </div>
        <div class="col-sm-6">
           <div class="card" style="height: 550px" >
              <div class="card-body">
                 <h5 class="card-title ">
                    <span class="align-middle" style="height: 25px; width: 25px; background-color: #2ACC27; border-radius: 50%; display: inline-block;"></span>
                    <span class="align-middle"> Available</span>
                 </h5>
                 <img src="https://media.gq-magazine.co.uk/photos/5d1398fb3bedf2bfabdb6a8a/master/w_1755,h_1170,c_limit/airbus-helicopters-1-gq-3jun15-pr_b.jpg" class="d-block img-fluid" style="height : 300px ;" alt="...">
                 <p class="card-text">
                    <h5 class="text-center">
                       Car Name
                    </h5>
                 </p>
                 <p class="card-text">
                    <h5 class="text-center">
                       Price
                    </h5>
                 </p>
                 <p class="card-text">
                    <h5 class="text-center">
                       Rating
                    </h5>
                 </p>
                 <a href="/cardetails" class="float-end"><button type="button" class="btn btn-dark">Detail</button></a>
              </div>
            </div>
        </div>
    </div>

    <div class="row my-5 ">
        <div class="col-sm-6">
            <div class="card" style="height: 550px">
                <div class="card-body">
                    <h5 class="card-title ">
                        <span class="align-middle" style="height: 25px; width: 25px; background-color: #CC2727; border-radius: 50%; display: inline-block;"></span>
                        <span class="align-middle"> Booked</span>
                    </h5>
                    <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png" class="d-block img-fluid" style="height : 300px ;" alt="..." >
                    <p class="card-text">
                        <h5 class="text-center">
                        Car Name
                        </h5>
                    </p>
                    <p class="card-text">
                        <h5 class="text-center">
                        Price
                        </h5>
                    </p>
                    <p class="card-text">
                        <h5 class="text-center">
                        Rating
                        </h5>
                    </p>
                    <a href="/cardetails" class="float-end"><button type="button" class="btn btn-dark">Detail</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
        </div>
    
    </div>
@endsection
