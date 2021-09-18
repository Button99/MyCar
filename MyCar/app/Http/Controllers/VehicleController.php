<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\DataLog;
use App\Models\Picture;
use Illuminate\Support\Facades\Auth;

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
            'cover_image' => 'image|max:1999'
        ]);

        if($validateData == TRUE) {
            $vehicle= new Vehicle;
            $datalog= new DataLog;
            $picture= new Picture;

            $datalog->model= $request->input('model');
            $datalog->count= 0;
            $datalog->save();

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

            $vehicle->user_id= Auth::user()->id;
            $vehicle->dataLog_id= $datalog->id;

            $vehicle->save();

            $filenameWithExt= $request->file('cover_image')->getClientOriginalName();
            $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension= $request->file('cover_image')->getClientOriginalExtension();
            $filenameToStore= $filename.'_'.time().'.'.$extension;
            $path= $request->file('cover_image')->storeAs('public/photo_album', $filenameToStore);
            
            $picture->path= $path;
            $picture->mime_type= $extension;
            $picture->car= 0;
            $picture->user_id= Auth::user()->id;
            $picture->vehicle_id= $vehicle->id;
            $picture->save();

            return redirect('/');
        }
    }

    public function show($id) {
        $vehicle= Vehicle::find($id);

        $picture= Picture::select('*')->where('vehicle_id', '=', $vehicle->id)
            ->where('car', '=', '0');
        
        $data= DataLog::find($vehicle->dataLog_id);
        $data->count+=1;
        $data->save();

        return view('/carProfile')->with(['vehicle'=> $vehicle], ['picture'=> $picture]);
    }

    public function index() {
        $vehicles= Vehicle::select('*')->where('hide', '=', '0')->orderBy('created_at', 'desc')->get();
        $picture= Picture::select('*')->where('car', '=', '0')->get();

        return view('allCars')->with(['vehicles'=> $vehicles, 'picture'=> $picture]);
    }

    public function mostViewedIndex() {
        $vehicles= Vehicle::join('data_logs', 'data_logs.id', '=', 'vehicles.dataLog_id')->where('hide', '=', '0')->orderBy('count', 'asc')->get();
        
        return view('mostViewed')->with('vehicles', $vehicles);
    }

    public function destroy($id) {
        $vehicle= Vehicle::find($id);

        $vehicle->delete();

        return redirect('/')->with('success');
    }

    public function myCars() {
        $vehicles= Vehicle::select('*')->where('vehicles.user_id', '=', Auth::user()->id)->get();

        return view('myCars')->with('vehicles', $vehicles);
    } 

    public function hideCar($id) {
        $vehicle= Vehicle::find($id);

        $vehicle->hide= 1;

        $vehicle->save();

        return redirect('/')->with('success', 'Your car has been in hide mode!');
    }

    public function showCar($id) {
        $vehicle= Vehicle::find($id);

        $vehicle->hide= 0;

        $vehicle->save();

        return redirect('/')->with('success', 'Other users can see your car!');
    }
}
