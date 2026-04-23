<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Models\Appoinment;
use App\Repositories\Appointment\AppointmentRepository;

class AgentController extends Controller
{
    public function __construct(private AppointmentRepository $appointmentRepository) {}

    public function appointment()
    {
        $appointments = $this->appointmentRepository->getAll();

        return view("agent/appointment", [
            "appointments" => $appointments
        ]);
    }

    public function appointmentDetail($id)
    {
        $appointment = $this->appointmentRepository->getById($id);

        if (!$appointment) {
            abort(404);
        }

        return view("agent/appointment-detail", [
            "appointment" => $appointment
        ]);
    }

    public function createProperty($id)
    {
        return view("agent/create-property");
    }

    public function property()
    {
        return view("agent/property");
    }

    public function detailProperty($id)
    {
        return view("agent/detail-property");
    }

    public function publication($id)
    {
        return view("agent/publication-property");
    }

    public function offer()
    {
        return view("agent/offer");
    }
}
