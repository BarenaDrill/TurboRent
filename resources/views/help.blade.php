@extends('layouts.main')

@section('container')
    
    <h2 class="mt-4" style="color: #fcf0c8"><strong>FAQ</strong></h2>
    <div class="accordion accordion-flush mt-3 shadow" id="accordionFlushExample">
        <div class="accordion-item" style="background-color: #c9bf9f">
            <h2 class="accordion-header" id="flush-headingOne">
                <button style="background-color: #fcf0c8" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <strong>What is Turbo Rent?</strong>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Turbo Rent is a car rental application. In this application users can borrow and rent their cars.
                </div>
            </div>
        </div>
        <div class="accordion-item" style="background-color: #c9bf9f">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button style="background-color: #fcf0c8" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <strong>How To Use App?</strong>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>
        <div class="accordion-item" style="background-color: #c9bf9f">
            <h2 class="accordion-header" id="flush-headingThree">
                <button style="background-color: #fcf0c8" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <strong>Community Guidelines</strong>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-4" style="color: #fcf0c8"><strong>Report</strong></h2>
    <form>
        <textarea class="mt-2 mb-2" name="comment" placeholder="comment here.." id="" cols="149" rows="5" value="{{ old('comment') }}"></textarea> 
        <button class="btn btn-dark" type="submit">SEND</button>
    </form>
@endsection