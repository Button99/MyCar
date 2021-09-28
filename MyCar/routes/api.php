<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\DataLog;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Picture;
use App\Models\Accessory;

Route::group(['middleware' => 'api'], function() {
    Route::get('vehicles', function() {
        return Vehicle::latest()->orderBy('created_at', 'desc')->get();
    });

    Route::get('vehicles/{id}', function($id) {
        return Vehicle::findOrFail($id);
    });

//     Route::post('vehicles/store', function(Request $req) {
//         return Vehicle::create(['fiels...']);
//     });
// });

    // Route::patch('vehicle/{id}', function(Request $req, $id) {
    //     Vehicle::findOrFail($id)->update('fields...');
        
    // });

    Route::delete('vehicle/{id}', function($id) {
        return Vehicle::destroy($id);
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
