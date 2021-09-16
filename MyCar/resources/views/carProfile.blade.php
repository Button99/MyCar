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
                                    @if(Auth::user()->id == $vehicle->user_id)
                                        @if($vehicle->hide == 1)
                                            <a href="/carProfile/{{$vehicle-> id}}/showCar" class="btn btn-warning">Show</a>
                                        @else
                                            <a href="/carProfile/{{$vehicle-> id}}/hideCar" class="btn btn-warning">Hide</a>
                                        @endif
                                        <a href="/carProfile/{{$vehicle-> id}}/deleteCar" class="btn btn-danger">Delete</a>
                                    @endif
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endif
@endsection