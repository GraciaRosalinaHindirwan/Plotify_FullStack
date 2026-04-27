<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function negotiation()
    {
        return view('users/negotiation');
    }

    public function negotiationDetail($id)
    {
        return view('users/negotiation-detail', [
            "link" => '/users/negotiation',
            "title" => 'Detail Negosiasi',
            "negotiationId" => $id
        ]);
    }

    public function transaction()
    {
        return view('users/transaction', [
            "propertyName" => "Modern Building House",
            "transactionType" => "Pembayaran Langsung",
            "price" => "IDR 500.000.000,00"
        ]);
    }

    public function transactionMethod()
    {
        $propertyId = session('propertyId');
        return view('users/method-transaction',[
            'link' => route('property.detail', ['id' => $propertyId]),
            'title' => 'Transaction Method',
        ]);
    }
}
