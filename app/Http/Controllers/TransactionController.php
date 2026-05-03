<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;


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
        $transaction = transaction::with([
            'property.property_image'
        ])->get();

        return view('users/transaction', [
            'transactions' => $transaction,
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

    public function transactionDetail($id){
        $transaction = transaction::with([
            'property'
        ])->findOrFail($id);

        return view('users/transactionDetail',[
            'transaction' => $transaction,
            'link' => route('users.transaction'),
            'title' => 'Detail Transaksi',
        ]);
    }
}
