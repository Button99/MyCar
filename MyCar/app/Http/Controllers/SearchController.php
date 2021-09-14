<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class SearchController extends Controller
{

    public function index() {
        return view('searchForm');
    }

    public function show(Request $req) {

        $vehicles= Vehicle::select('*')->where([
                                                    ['model', '=', $req->input('model')],
                                                    ['condition', 'LIKE', $req->input('condition')],
                                                    ['mileage', '=', $req->input('mileage')],
                                                    ['category', '=', $req->input('category')],
                                                    ['price', '=', $req->input('price')]
                                                ])->get();
        
        if($vehicles) {
            return view('searchResults')->with('vehicles', $vehicles);
        }

        else {
            $error= 'Cant find something!';

            return redirect('/search')->with('error', $error);
        }
    }
}
