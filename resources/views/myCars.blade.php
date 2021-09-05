@extends('layouts.app')
    @section('content')
    <div class="layout">
        <h1> My Cars </h1>
        @if($vehicles)
            <section class="second">    
                <ul>
                    @foreach($vehicles as $vehicle)
                        <li>
                            <div class="card">
                                <img
                                    src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h5 class="card-title">Model: {{$vehicle-> model}}</h5>
                                    <p class="card-text">
                                        Condition: {{$vehicle->condition}}<br>
                                        Price: <b>{{$vehicle->price}}</b>
                                    </p>
                                    <a href="/carProfile/{{$vehicle->id}}" class="btn btn-primary">View more</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>
        @else
            <p> Sorry you dont have any available cars! </p>
        @endif
    </div>
    @endsection