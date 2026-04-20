<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Models\Appoinment_schedule;
use App\Models\Appoinment;
use App\Models\User;
use App\Models\Agent_regency;
use App\Models\Regency;
use App\Models\Province;
use App\Models\District;
use Termwind\Components\Raw;

class UsersController extends Controller
{
    public function property()
    {
        return view('users/property');
    }

    public function propertyDetail($id)
    {
        return view('users/detail-property', compact('id'));
    }

    public function chooseAgent(Request $request)
    {
        $search = $request->input('search');
        $locationFilter = $request->input('location');

        $agentQuery = Agent::with(['user', 'agentRegency.regency'])
            ->whereHas("user", function ($q) use ($search) {
                $q->where('username', 'like', '%' . $search . '%');
            });

        if ($locationFilter) {
            $agentQuery->whereHas('agentRegency.regency', function ($q) use ($locationFilter) {
                $q->where('regency_id', $locationFilter);
            });
        }

        $agents = $agentQuery->get();

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

    public function chooseAgentAction(Request $request)
    {
        // ambil agent id dari input hidden di agent card
        $agentId = $request->input('agent_id');

        // set session supaya nanti agentId bisa diambil waktu insert appointment
        session([
            'agentId' => $agentId
        ]);

        // redirect ke step ke-2(appointment)
        return redirect()->route('users.appointment');
    }

    public function appoinment()
    {
        if (!session()->has('agentId')) {
            return redirect()->route('users.chooseAgent');
        }

        $agent = Agent::find(6);

        // ambil semua districts untuk ngisi dropdown
        $districts = District::all();

        return view('users/appoinment', [
            "link" => '/users/choose/agent',
            "title" => 'Jadwal Pertemuan',
            'agent' => $agent,
            'currentStep' => 2,
            'districts' => $districts,
        ]);
    }

    public function appoinmentPost(Request $request)
    {
        // kita butuh data agentId, sellerId, districtId, propertyName, propertyAddress, dll
        $datetime = $request->input('actual_time_schedule');
        $data = $request->all();

        // get session
        // ngambil agentId dari session
        $agentId = session()->get("agentId");
        $sellerId = auth()->id();
        dd($sellerId);


        /* Appoinment_schedule::create([ */
        /*     'schedule' => $datetime, */
        /* ]); */

        return redirect()->route('users.review');
    }

    public function review()
    {
        return view('users/review', [
            "link" => '/users/appoinment',
            "title" => 'Review Jadwal',
            'currentStep' => 3
        ]);
    }

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
        return view('users/method-transaction');
    }
}
