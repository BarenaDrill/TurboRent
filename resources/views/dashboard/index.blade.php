@extends('dashboard.main')

@section('container')

   <div class="d-flex mt-3 align-items-center justify-content-between mb-3">
      <h2>My Vehicles</h2>
      <a class="nav-link" aria-current="page" href="/dashboard/carManager/addVehicle">
         <h5>
            + Add Vehicle
         </h5>
      </a>
   </div>

   @foreach ($vehicles as $vehicle)

      <div class="card mb-3 h-100 shadow">
         <div class="row g-0">
            <div class="col-md-8">
               <div class="card-body ms-3 mt-2">
                  @if ($vehicle->status === 0)
                     <h5 class="card-title">
                        <span class="align-middle me-2" style="height: 25px; width: 25px; background-color: #CC2727; border-radius: 50%; display: inline-block;"></span>
                        <span class="align-middle">Booked</span>
                     </h5>
                  @else
                     <h5 class="card-title ">
                        <span class="align-middle me-2" style="height: 25px; width: 25px; background-color: #2ACC27; border-radius: 50%; display: inline-block;"></span>
                        <span class="align-middle">Available</span>
                     </h5>
                  @endif
                  
                  <p class="card-text ms-2">

                     <h4 class="mb-1 d-flex align-item-center">
                        {{ $vehicle->carName }}
                        <a href="/dashboard/carManager/updateVehicle/{{ $vehicle->id }}" class="float-start">
                           <img class="ms-2" src="https://img.icons8.com/material-outlined/384/000000/edit--v1.png" style="width: 20px ; height: 20px ; "/>
                        </a>
                        <a href="/dashboard/carManager/deleteVehicle/{{ $vehicle->id }}" class="float-start">
                           <img class="ms-2" src="https://img.icons8.com/ios-glyphs/384/000000/trash--v1.png" style="width: 20px ; height: 20px ; "/>
                        </a>
                     </h4>
                     <h6 class="mb-2">
                        IDR {{ number_format($vehicle->price) }} <br>
                     </h6>

                     @if ( $vehicle->totalRating == 0 )
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                     @elseif( $vehicle->totalRating == 1 )
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                     @elseif( $vehicle->totalRating == 2 )
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                     @elseif( $vehicle->totalRating == 3 )
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                     @elseif( $vehicle->totalRating == 4 )
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/star--v1.png" style="height: 18px"/>
                     @elseif( $vehicle->totalRating == 5 )
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                        <img src="https://img.icons8.com/emoji/48/000000/star-emoji.png" style="height: 20px"/>
                     @endif
             
                  </p>

                  

               </div>
            </div>

            <div class="col-md-4 d-flex align-items-center " >
               <img src="/storage/carImage/{{ $vehicle->carImage }}" alt="..." class="img-fluid rounded-end">
            </div>
         
         </div>
      </div>

   @endforeach

@endsection
