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

   @foreach ($vehicles as $vehicle)

      <div class="card mt-3 ">
         <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center h-100" >
               <img src="/storage/public/carImage/{{ $vehicle->carImage }}" alt="..." class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
               <div class="card-body">
                  @if ($vehicle->status === 0)
                     <h5 class="card-title">
                        <span class="align-middle" style="height: 25px; width: 25px; background-color: #CC2727; border-radius: 50%; display: inline-block;"></span>
                        <span class="align-middle">Booked</span>
                     </h5>
                  @else
                     <h5 class="card-title ">
                        <span class="align-middle" style="height: 25px; width: 25px; background-color: #2ACC27; border-radius: 50%; display: inline-block;"></span>
                        <span class="align-middle">Available</span>
                     </h5>
                  @endif
                  
                  <p class="card-text ms-2">
                     <h4 class="m-0">
                        {{ $vehicle->carName }}
                        <a href="/cardetails" class="float-end">
                           <button type="button" class="btn btn-dark me-3">
                              <small>DETAIL</small>
                           </button>
                        </a>
                     </h4>
                     <h5>
                        IDR {{ $vehicle->price }}<br>
                        {{ $vehicle->totalRating }}
                     </h5>
                  </p>

                  <p class="card-text m-0"><small class="text-muted">Last updated 3 mins ago</small></p>

                  

               </div>
            </div>
         </div>
      </div>

   @endforeach

@endsection
