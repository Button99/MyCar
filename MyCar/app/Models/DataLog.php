<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLog extends Model
{
    use HasFactory;

    public function vehicle_log() {
        return $this->hasMany('App\Models\Vehicle');
    }
}
