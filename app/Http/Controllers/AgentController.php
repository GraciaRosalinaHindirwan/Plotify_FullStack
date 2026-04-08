<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

class AgentController extends Controller
{
    public function appointment(){
        $user = Auth::user();
       return view("agent/appointment");
    }

    public function appointmentDetail($id){
        return view("agent/appointment-detail");
    }

    public function createProperty($id){
        return view("agent/create-property");
    }

    public function property(){
        return view("agent/property");
    }

    public function detailProperty($id){
        return view("agent/detail-property");
    }

    public function publication($id){
        return view("agent/publication-property");
    }

    public function offer(){
        return view("agent/offer");
    }
}
