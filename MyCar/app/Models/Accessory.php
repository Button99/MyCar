<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;

    public function vehicle_acc() {
        return $this->belongsTo('App\Models\Vehicle');
    }
}
