@extends('layouts.main')

@section('title')
    Home
@endsection

@section('container')
    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-4" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="mt-5" style="color: #354259">
        <h1><strong>What is TurboRent?</strong></h1>
        <p style="color: #354259">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <br>
    <div class="mt-5 text-center" style="color: #354259">
        <h1><strong>Explore Cars Around You</strong></h1>
        <div class="d-flex justify-content-around">
            <div class="card shadow mt-4" style="width: 18rem;">
                <img src="https://s3-ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2021/04/30150018/toyota-raize-resmi-meluncur-eksterior-002.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="color: #354259">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card shadow mt-4" style="width: 18rem;">
                <img src="https://s3-ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2021/04/30150018/toyota-raize-resmi-meluncur-eksterior-002.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="color: #354259">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card shadow mt-4" style="width: 18rem;">
                <img src="https://s3-ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2021/04/30150018/toyota-raize-resmi-meluncur-eksterior-002.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="color: #354259">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection