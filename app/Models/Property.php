<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name', 
        'address',
        'price',
        'area_in_hectare',
        'description'
    ];
}
