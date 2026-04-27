<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
        'property_id',
        'seller_id',
        'agen_id',
        'buyer_id',
        'negotiation_id',
        'deal_price',
        'transaction_type'
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

    public function negotiation(){
        return $this->belongsTo(negotiation::class);
    }

}
