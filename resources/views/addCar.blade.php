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
                     <label for="carType">City</label>
                     <input type="text" class="form-control" id="inputCity">
                  </div>

                  <div class="form-group col-md-3">
                     <label for="inputState">State</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                     </select>
                  </div>

                  <div class="form-group col-md-3">
                     <label for="inputZip">Zip</label>
                     <input type="text" class="form-control" id="inputZip">
                  </div>
               </div>

               <div class="d-flex flex-row justify-content-evenly align-items-end mt-5">
                  <p class="mb-0">
                     Already registered?
                     <a href="/login" class="text-black fw-bold"> Login here!</a>
                  </p>
                  <button class="btn btn-outline-dark btn-lg px-3" type="submit">REGISTER</button>
               </div>

            </form>
        </div>
    </div>
@endsection