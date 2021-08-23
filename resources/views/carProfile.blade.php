@extends('layouts.app')

@section('content')
    @if($vehicle)
        <h1> Profile </h1>
        <div class="container-profile">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-sm-5">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">

                                <h5 class="card-title">Name: {{$vehicle->model }}</h5>
                                <p class="card-text">
                                    Condition: {{$vehicle->condition}} <br>
                                    Color: {{$vehicle->color}}<br>
                                    Mileage: {{$vehicle->mileage}}<br>
                                    Category: {{$vehicle->category}}<br>
                                    Fuel Type: {{$vehicle->fuel_type}}<br>
                                    Type: {{$vehicle->type}}<br>
                                    Kteo: {{$vehicle->kteo}}<br>
                                    Year: {{$vehicle->year}}<br>
                                    Engine: {{$vehicle->engine}}<br>
                                    Doors: {{$vehicle->doors}}<br>
                                    Seats: {{$vehicle->seats}}<br>
                                    Price: {{$vehicle->price}}<br>

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endif
@endsection