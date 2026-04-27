<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class negotiation extends Model
{
    protected $fillable = [
        'property_id',
        'seller_id',
        'agen_id',
        'buyer_id',
        'offer_price',
        'description',
        'is_agent_approve',
        'is_seller_approve',
    ];

    public function seller(){
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function buyer(){
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function agen(){
        return $this->belongsTo(Agent::class, 'agen_id');
    }

    public function property(){
        return $this->belongsTo(Property::class);
    }

    public function transaction(){
        return $this->hasOne(transaction::class);
    }
}
