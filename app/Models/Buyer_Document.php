<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer_Document extends Model
{
    protected $fillable = [
        'transaction_id',
        'document_name',
        'document_type',
        'file_path',
        'is_approve_agen',
    ];

    public function transaction(){
        return $this->belongsTo(transaction::class, 'transaction_id');
    }
}
