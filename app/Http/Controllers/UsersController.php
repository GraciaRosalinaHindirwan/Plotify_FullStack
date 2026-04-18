<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function property(){
        return view('users/property');
    }

    public function propertyDetail($id){
        return view('users/detail-property', compact('id'));
    }

    public function addProperty(){
        return view('users.add-property', [
            "link" => '/users/property',
            "title" => 'Pengajuan Penjualan Properti',
            'currentStep' => 1
        ]);
    }

    public function chooseAgent(){
        return view('users/choose-agent', [
            "link" => '/users/choose/agent',
            "title" => 'Pilih Agen Properti',
            'currentStep' => 2,
            "agentName" => "Rizki Pratama",
            "phone" => "088225357849",
            "location" => "Bantul - Yogyakarta"
        ]);
    }

    public function appoinment(){
        return view('users/appoinment', [
            "link" => '/users/choose/agent',
            "title" => 'Jadwal Pertemuan',
            'currentStep' => 3
        ]);
    }
    public function review(){
        return view('users/review', [
            "link" => '/users/appoinment',
            "title" => 'Review Jadwal',
            'currentStep' => 4
        ]);
    }

    public function negotiation(){
        return view('users/negotiation');
    }

    public function negotiationDetail($id){
        return view('users/negotiation-detail', [
            "link" => '/users/negotiation',
            "title" => 'Detail Negosiasi',
            "negotiationId" => $id
        ]);
    }

    public function transaction(){
        return view('users/transaction', [
        "propertyName" => "Modern Building House",
        "transactionType" => "Pembayaran Langsung",
        "price" => "IDR 500.000.000,00"
        ]);
    }

    public function transactionMethod(){
        return view('users/method-transaction');
    }
}
