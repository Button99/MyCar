<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function store(Request $request) {

        $validateData= $request->validate([
            'model' => ['required', 'string', 'max: 100'],
            'mileage' => ['required', 'string', 'max:50'],
            'color' => ['required', 'string', 'max: 50'],
            'condition' => ['required', 'in:Used,New'],
            'category' => ['required', 'in:Mini Vans, Luxury Vehicles, Sports/PerformanceCars, SUVs/Off-road Vehicles, Electric & Hybrid'],
            'fuel_type' => ['required', 'in:Gasoline, Diesel, Liquefied Petroleum, Bio Diesel, Ethanol'],
            'type' => ['required', 'in:rent, buy'],
            'kteo' => ['required', 'date'],
            'year' => ['required', 'date'],
            'engine' => ['required', 'integer'],
            'doors' => ['required', 'integer'],
            'seats' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
        ]);

        if($validateData == TRUE) {
            $vehicle= new Vehicle;
            $vehicle->model= $request->input('model');
            $vehicle->mileage= $request->input('mileage');
            $vehicle->color= $request->input('color');
            $vehicle->condition= $request->input('condition');
            $vehicle->fuel_type= $request->input('fuel_type');
            $vehicle->type= $request->input('type');
            $vehicle->kteo= $request->input('kteo');
            $vehicle->year= $request->input('year');
            $vehicle->engine= $request->input('engine');
            $vehicle->doors= $request->input('doors');
            $vehicle->seats= $request->input('seats');
            $vehicle->price= $request->input('price');
            
            $vehicle->save();

            return redirect('/');
        }
    }
}
