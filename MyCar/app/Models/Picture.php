<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable= [
        'path',
        'mime_type',
        'created_at',
        'updated_at',
        'car',
        'user_id',
        'vehicle_id'
    ];

    public function user_picture() {
        return $this->belongsTo('App\Models\User');
    }

    public function vehicle_pic() {
        return $this-> belongsTo('App\Models\Vehicle');
    }
}
