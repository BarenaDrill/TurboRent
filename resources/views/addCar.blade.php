@extends('layouts.main')

@section('title')
    Add Car
@endsection

@section('container')
    {{-- kyknya g perlu yg ini de soalny di atas dh ada logo --}}
    {{-- <div class="text-center">
        <img src="/img/logo.png" style="width:160px;">
    </div> --}}
    <div class="container-fluid py-5 d-flex justify-content-center ">
        <div class="card card-body text-black p-5" style="border-radius: 1rem; background: #FCF0C8;" >
            <form action="/addCar" method="post" class="mb-md-5 px-5" enctype="multipart/form-data">
               @csrf
               <h2 class="fw-bold mb-5 text-uppercase text-center">Add car</h2>

               {{-- CAR NAME --}}
               <div class="form-floating">
                  <div class="mb-3">
                  <label class="form-label" for="carName">Car Name</label>
                  <input type="text" name="carName" class="form-control rounded @error('carName') is-invalid @enderror" id="carName" required value="{{ old('carName') }}" >
                  </div>
                  @error('carName')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
               </div>

               {{-- PLATE NUMBER --}}
               <div class="form-floating">
                  <div class="mb-3">
                  <label class="form-label" for="plateNumber">Plate Number</label>
                  <input type="text" name="plateNumber" class="form-control rounded @error('plateNumber') is-invalid @enderror" id="plateNumber" required value="{{ old('plateNumber') }}" >
                  </div>
                  @error('plateNumber')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
               </div>

               {{-- PRICE --}}
               <div class="form-floating">
                  <div class="mb-3">
                  <label class="form-label" for="price">Price</label>
                  <input type="number" name="price" class="form-control rounded @error('price') is-invalid @enderror" id="price" required value="{{ old('price') }}" >
                  </div>
                  @error('price')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
               </div>       
               
               {{-- CAR IMAGE --}}
               <div class="mb-3">
                  <label for="carImage" class="form-label">Car Image</label>
                  <input class="form-control rounded" type="file" id="carImage" name="carImage">
               </div>

               {{-- ADDRESS --}}
               <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
                  <textarea class="form-control rounded" id="address" rows="2" name="address"></textarea>
               </div>
               

               {{-- DESCRIPTION ROW 1--}}
               <div class="d-flex flex-row justify-content-between">

                  <div class="form-group col-md-3">
                     <label for="inputState">Car Type</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Manual</option>
                        <option>Automatic</option>
                     </select>
                  </div>

                  <div class="form-group col-md-3">
                     <label for="inputState">Fuel Type</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Petrol</option>
                        <option>Electric</option>
                     </select>
                  </div>

                  <div class="form-group col-md-3">
                     <label for="inputState">Seat</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>2 Seater</option>
                        <option>4 Seater</option>
                        <option>6 Seater</option>
                     </select>
                  </div>

               </div>

               {{-- DESCRIPTION ROW 2--}}
               <div class="d-flex flex-row justify-content-between mt-2">

                  <div class="form-group col-md-3">
                     <label for="inputState">Wheel Model</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Front-Wheel Drive</option>
                        <option>Rear-Wheel Drive</option>
                        <option>Four-Wheel Drive</option>
                     </select>
                  </div>

                  <div class="form-group col-md-3">
                     <label for="inputState">Bluetooth</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Available</option>
                        <option>Not Available</option>
                     </select>
                  </div>

                  <div class="form-group col-md-3">
                     <label for="inputState">Aux</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Available</option>
                        <option>Not Available</option>
                     </select>
                  </div>

               </div>

               {{-- DESCRIPTION ROW 3--}}
               <div class="d-flex flex-row justify-content-between mt-2">

                  <div class="form-group col-md-3">
                     <label for="inputState">Child Seat</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Available</option>
                        <option>Not Available</option>
                     </select>
                  </div>

                  <div class="form-group col-md-3">
                     <label for="inputState">Pet Friendly</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Available</option>
                        <option>Not Available</option>
                     </select>
                  </div>

                  <div class="form-group col-md-3">
                     <label for="inputState">No Smoking</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Available</option>
                        <option>Not Available</option>
                     </select>
                  </div>

               </div>


               <div class="d-flex flex-row justify-content-evenly align-items-end mt-5">
                  <button class="btn btn-outline-dark btn-lg px-3" type="submit">ADD GAME</button>
               </div>

            </form>
        </div>
    </div>
@endsection