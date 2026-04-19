<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appoinment_schedule;
use App\Models\User;
use App\Models\Agent_regency;
use App\Models\Regency;

class UsersController extends Controller
{
    public function property(){
        return view('users/property');
    }

    public function propertyDetail($id){
        return view('users/detail-property', compact('id'));
    }

    public function chooseAgent(Request $request){
        $search = $request->input('search');
        $locationFilter = $request->input('location'); 
        if(empty($search)){
            $users = User::where('role', 'agent')->get();
        } else {
            $users = User::where('role', 'agent')
                    ->where('fullname', 'like', '%' . $search . '%')->get();
        }
dd($users[0]);
        if(!empty($locationFilter)){
            $users->whereHas('agent->agent_regencies', function ($query) use ($locationFilter) {
                $query->where('regency_id', $locationFilter);
            });
        }

        $agents = [];
        foreach ($users as $user) {
                $agentRegencies = Agent_regency::where('agent_id', $user->agent->id)->with('regency')->first();
                $agents[] = [
                    "agentName" => $user->fullname,
                    "phone" => $user->telp_number,
                    "location" => $agentRegencies?->regency?->name ?? 'Lokasi tidak tersedia',
                    "profile" => $user->profile
                ];
            }

        $regencies = Regency::orderBy('name')->get();
        return view('users/choose-agent', [
            "link" => '/users/property',
            "title" => 'Pilih Agen Properti',
            'currentStep' => 1,
            'agents' => $agents,
            'regencies' => $regencies,
            'searchQuery' => $search,
        ]);
    }

    public function appoinment(){
        return view('users/appoinment', [
            "link" => '/users/choose/agent',
            "title" => 'Jadwal Pertemuan',
            'currentStep' => 2
        ]);
    }

    public function appoinmentPost(Request $request){
       Appoinment_schedule::create([
            'schedule' => $request->schedule,
       ]);
    }

    public function review(){
        return view('users/review', [
            "link" => '/users/appoinment',
            "title" => 'Review Jadwal',
            'currentStep' => 3
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
