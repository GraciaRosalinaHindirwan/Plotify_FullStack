<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appoinment_schedule extends Model
{
    protected $fillable = [
        'appointment_id',
        'schedule',
        'is_agen_approve_schedule',
        'is_seller_approve_schedule',
    ];

    public function appoinment(){
        return $this->belongsTo(Appoinment::class);
    }
}
