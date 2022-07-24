@extends('dashboard.main')

@section('styleManual')
   <style>
      .form-section{
      /* display: none;  */
      }
      .form-section.current{
         display: inherit;
      }
      .parseley-errors-list{
         margin: 2px 0 3px;
         padding: 0;
         list-style-type: none;
         color: red;
      }
   </style>
@endsection

@section('container')
<section>
   <div class="container-fluid py-2 w-100 ">

       <div class="text-black p-3" style="border-radius: 1rem;" >

           <div class="mb-0">
              <h2 class="fw-bold text-uppercase text-start mb-0">Add Vehcile</h2>
           </div>

           <div class="">
              <form action="/dashboard/carManager/addVehicle" method="post" class="mb-md-5 px-5 contact-form" enctype="multipart/form-data">
                 @csrf

                  {{-- PRE INPUTED DATA --}}
                  <input type="hidden" name="status" value="1">
                  <input type="hidden" name="totalRating" value="0">
                  <input type="hidden" name="created_at" value="{{ date("h:i:sa"); }}">
                  <input type="hidden" name="updated_at" value="{{ date("h:i:sa"); }}">
                  <input type="hidden" name="userID" value="1">


                  <div class="form-section">
                    {{-- CAR NAME --}} 
                    <div class="mt-3">
                       <label class="form-label" style="font-weight: 600;" style="font-weight: 600;" style="font-weight: 600;" for="carName">Car Name</label>
                       <input type="text" name="carName" class="form-control rounded @error('carName') is-invalid @enderror" id="carName" required value="{{ old('carName') }}" >
                    </div>
                    @error('carName')
                       <div class="invalid-feedback">
                          {{ $message }}
                       </div>
                    @enderror
                       
                    {{-- PLATE NUMBER --}}
                    <div class="mt-3">
                       <label class="form-label" style="font-weight: 600;" style="font-weight: 600;" for="plateNumber">Plate Number</label>
                       <input type="text" name="plateNumber" class="form-control rounded @error('plateNumber') is-invalid @enderror" id="plateNumber" required value="{{ old('plateNumber') }}" >
                    </div>
                    @error('plateNumber')
                       <div class="invalid-feedback">
                          {{ $message }}
                       </div>
                    @enderror
     
                    {{-- PRICE --}}
                    <div class="mt-3">
                       <label class="form-label" style="font-weight: 600;" style="font-weight: 600;" for="price">Price</label>
                       <input type="number" name="price" class="form-control rounded @error('price') is-invalid @enderror" id="price" required value="{{ old('price') }}" >
                    </div>
                    @error('price')
                       <div class="invalid-feedback">
                          {{ $message }}
                       </div>
                    @enderror
                    
                    {{-- CAR IMAGE --}}
                    <div class="mt-3">
                       <label for="carImage" class="form-label" style="font-weight: 600;">Car Image</label>
                       <input class="form-control rounded" type="file" id="carImage" name="carImage">
                    </div>
     
                    {{-- ADDRESS --}}
                    <div class="mt-3">
                       <label for="address" class="form-label" style="font-weight: 600;">Address</label>
                       <textarea class="form-control rounded" id="carAddress" rows="2" name="carAddress"></textarea>
                    </div>

                 </div>
                 
                 <div class="form-section">
                    {{-- DESCRIPTION ROW 1--}}
                    <div class="d-flex flex-row justify-content-between mt-3">
      
                       <div class="col-md-3">
                          <label style="font-weight: 600;" for="carType" >Car Type</label>
                          <select id="carType" name="carType" class="form-control">
                             <option selected>Choose...</option>
                             <option>Manual</option>
                             <option>Automatic</option>
                          </select>
                       </div>
     
                       <div class="col-md-3">
                          <label style="font-weight: 600;" for="fuelType">Fuel Type</label>
                          <select id="fuelType" name="fuelType" class="form-control">
                             <option selected>Choose...</option>
                             <option>Petrol</option>
                             <option>Electric</option>
                          </select>
                       </div>
     
                       <div class="col-md-3">
                          <label style="font-weight: 600;" for="seat">Seat</label>
                          <select id="seat" name="seat" class="form-control">
                             <option selected>Choose...</option>
                             <option>2 Seater</option>
                             <option>4 Seater</option>
                             <option>6 Seater</option>
                          </select>
                       </div>
     
                    </div>
     
                    {{-- DESCRIPTION ROW 2--}}
                    <div class="d-flex flex-row justify-content-between mt-3">
     
                       <div class="col-md-3">
                          <label style="font-weight: 600;" for="wheelModel">Wheel Model</label>
                          <select id="wheelModel" name="wheelModel" class="form-control">
                             <option selected>Choose...</option>
                             <option>Front-Wheel Drive</option>
                             <option>Rear-Wheel Drive</option>
                             <option>Four-Wheel Drive</option>
                          </select>
                       </div>
     
                       <div class="col-md-3">
                          <label style="font-weight: 600;" for="bluetooth">Bluetooth</label>
                          <select id="bluetooth" name="bluetooth" class="form-control">
                             <option selected>Choose...</option>
                             <option>Available</option>
                             <option>Not Available</option>
                          </select>
                       </div>
     
                       <div class="col-md-3">
                          <label style="font-weight: 600;" for="aux">Aux</label>
                          <select id="aux" name="aux" class="form-control">
                             <option selected>Choose...</option>
                             <option>Available</option>
                             <option>Not Available</option>
                          </select>
                       </div>
     
                    </div>
     
                    {{-- DESCRIPTION ROW 3--}}
                    <div class="d-flex flex-row justify-content-between mt-3">
     
                       <div class="col-md-3">
                          <label style="font-weight: 600;" for="childSeat">Child Seat</label>
                          <select id="childSeat" name="childSeat" class="form-control">
                             <option selected>Choose...</option>
                             <option>Available</option>
                             <option>Not Available</option>
                          </select>
                       </div>
     
                       <div class="col-md-3">
                          <label style="font-weight: 600;" for="petFriendly">Pet Friendly</label>
                          <select id="petFriendly" name="petFriendly" class="form-control">
                             <option selected>Choose...</option>
                             <option>Available</option>
                             <option>Not Available</option>
                          </select>
                       </div>
     
                       <div class="col-md-3">
                          <label style="font-weight: 600;" for="noSmoking">No Smoking</label>
                          <select id="noSmoking" name="noSmoking" class="form-control">
                             <option selected>Choose...</option>
                             <option>Available</option>
                             <option>Not Available</option>
                          </select>
                       </div>
     
                    </div>
     
                    {{-- <div class="d-flex flex-row justify-content-evenly align-items-end mt-5">
                       <button class="btn btn-outline-dark btn-lg px-3" type="submit">ADD VEHICLE</button>
                    </div> --}}
  
                 </div>
  
                 <div class="form-navigation mt-4">
                    {{-- <button type="button" class="previous btn btn-info float-left">PREVIOUS</button> --}}
                    {{-- <button type="button" class="next btn btn-info float-right">NEXT</button> --}}
                    <button class="btn btn-outline-dark px-3 float-right" type="submit" style="font-weight: 600;">SUBMIT</button>
                 </div>
  
              </form>
           </div>
       </div>
   </div>
</section>

@endsection

@section('scriptManual')
   <script>
      $(function(){
         var $sections = $('form-section');

         function navigateTo(index){
            $sections.removeClass('current').eq(index).addClass('current');
            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $section.length - 1 ; 
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type=submit]').toggle(atTheEnd);
         }

         function curIndex(){
            return $sections.index($sections.filter('.current'))
         }

         $('.form-navigation .previous').click(function(){
            navigateTo(curIndex()-1);
         });

         $('.form-navigation .next').click(function(){
            $('.contact-form').parseley().whenValidate({
               group: 'block-' + curIndex
            }).done(function(){
               navigateTo(curIndex()+1);
            });
         });

         $sections.each(function(index,section){
            $(section).find(':input').alter('data-parsley-group','block-'+index);
         });

         navigateTo(0);
      });
   </script>
@endsection