<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'address',
        'price',
        'area_in_hectare',
        'description'
    ];

    public function propertyImage(){
        return $this->hasMany(Property_image::class);
    }

    public function spesification(){
        return $this->hasMany(Spesification::class);
    }

    public function facilities(){
        return $this->hasMany(Facilities::class);
    }

    public function appoinment(){
        return $this->belongsTo(Appoinment::class);
    }
}

