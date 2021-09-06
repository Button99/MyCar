<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['model', 'mileage', 'color', 'condition', 'fuel_type', 'type', 'kteo', 'year', 'engine', 'doors',
    'seats', 'price', 'updated_at', 'created_at', 'user_id', 'dataLog_id'];

    public function user_vehicle() {
        return $this->belongsTo('App\Models\User');
    }
    
    public function vehicle_l() {
        return $this->belongsTo('App\Models\DataLog');
    }
    public function vehicle_picture() {
        return $this->hasMany('App\Models\Picture');
    }

    public function vehicle_accessories() {
        return $this->hasMany('App\Models\Accessory');
    }
}
