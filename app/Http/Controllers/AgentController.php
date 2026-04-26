<?php

namespace App\Http\Controllers;

use App\Dto\AppointmentScheduleDTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Models\Property;
use App\Models\Property_image;
use App\Repositories\Appointment\AppointmentRepository;
use Carbon\Carbon;

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
            "link" => route("agent.appointmentList"),
            "title" => "Detail Pertemuan",
            "appointment" => $appointment
        ]);
    }

    public function approveAppointment($appointmentId)
    {
        $approveResult = $this->appointmentRepository->approveAppointment($appointmentId, true);

        if ($approveResult) {
            return redirect()
                ->route("agent.appointmentDetail", $appointmentId)
                ->with([
                    "status" => true,
                    "message" => "Berhasil Menyetujui Appointment"
                ]);
        } else {
            return redirect()
                ->route("agent.appointmentDetail", $appointmentId)
                ->with([
                    "status" => false,
                    "message" => "Gagal Menyetujui Appointment"
                ]);
        }
    }

    public function rescheduleAppointment($id)
    {
        $appointment = $this->appointmentRepository->getbyId($id);

        if (!$appointment) {
            abort(404);
        }

        return view("agent.reschedule-appointment", [
            "link" => route("agent.appointmentDetail", $id),
            "title" => "Atur Ulang Pertemuan",
            "appointment" => $appointment
        ]);
    }

    public function rescheduleAppointmentAction($appointmentId, Request $request)
    {
        $schedule = $request->input("schedule");

        $appointmentScheduleDto = new AppointmentScheduleDTO();

        $appointmentScheduleDto->schedule = Carbon::parse($schedule);
        $appointmentScheduleDto->isAgentApprove = true;
        $appointmentScheduleDto->isSellerApprove = false;

        $rescheduleResult = $this->appointmentRepository->rescheduleAppointment(
            $appointmentId,
            $appointmentScheduleDto
        );

        if ($rescheduleResult) {
            return redirect()
                ->route("agent.appointmentDetail", $appointmentId)
                ->with([
                    "status" => true,
                    "message" => "Berhasil Reschedule"
                ]);
        } else {
            return redirect()
                ->route("agent.appointmentDetail", $appointmentId)
                ->with([
                    "status" => false,
                    "message" => "Gagal Reschedule"
                ]);
        }
    }

    public function createProperty($id)
    {
        return view("agent/create-property");
    }

    public function property(Request $request)
    {
        $search = $request->input('search');
        $properties = Property::with('property_image')
        ->when($search, function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })
        ->get();
        
        return view("agent/property",[
            'properties' => $properties,
            'search' => $search,
        ]);
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
