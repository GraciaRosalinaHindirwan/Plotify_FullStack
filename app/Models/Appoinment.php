<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    protected $fillable = [
        'agent_id',
        'seller_id',
        'district_id',
        'property_name',
        'property_address',
        'is_approved_by_agen',
    ];

    public function agent(){
        return $this->belongsTo(Agent::class);
    }

    public function appoinment_schedules(){
        return $this->hasMany(Appoinment_schedule::class, 'appointment_id');
    }
}
