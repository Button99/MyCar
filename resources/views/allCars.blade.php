@extends('layouts.app')

@section('content')
    @if(count($vehicles) > 0)
    <div class="layout">
        <section class="first">
            <div class="card-options">
                <div class="card-body">
                    <h2 class="card-title">Options</h2>
                    <p class="card-text">

                        <input type="checkbox" id="high" name="high" value="0">
                        <label for="high"> Ascending Price</label><br>

                        <input type="checkbox" id="low" name="low" value="0">
                        <label for="low"> Descending Price</label><br>

                        <input type="checkbox" id="recently-added" name="recently-added" value="0">
                        <label for="recently-added"> Recenntly Added</label><br>

                        <input type="checkbox" id="cc-range" name="cc-range" value="0">
                        <label for="cc-range"> CC </label><br>

                        <h3> Car Type </h3>
                        <hr>
                        <input type="checkbox" id="mini-vans" name="mini-vans" value="0">
                        <label for="mini-vans"> Mini Van</label><br>

                        <input type="checkbox" id="sports-perf" name="sports-perf" value="0">
                        <label for="sports-perf"> Sports Performance</label><br>

                        <input type="checkbox" id="suv-off" name="suv-off" value="0">
                        <label for="suv-off"> SUV/Off-road Vehicles</label><br>

                        <input type="checkbox" id="electric-hybrid" name="electric-hybrid" value="0">
                        <label for="electric-hybrid"> Electric Hybrid </label><br>

                        <h3> Fuel Type </h3>
                        <hr>
                        <input type="checkbox" id="gasoline" name="gasoline" value="0">
                        <label for="gasoline"> Gasoline </label><br>

                        <input type="checkbox" id="diesel" name="diesel" value="0">
                        <label for="diesel">  Diesel </label><br>

                        <input type="checkbox" id="liq-petr" name="liq-petr" value="0">
                        <label for="liq-petr"> Liquefied Petroleum</label><br>

                        <input type="checkbox" id="bio" name="bio" value="0">
                        <label for="bio"> Bio Diesel </label><br>

                        <input type="checkbox" id="ethanol" name="ethanol" value="0">
                        <label for="ethanol"> Ethanol </label><br>
                    </p>
                </div>
            </div>
        </section>
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
    </div>
    @endif
@endsection