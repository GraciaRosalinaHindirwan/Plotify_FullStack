<?php

namespace App\Repositories\Appointment;

use App\Dto\AppointmentDTO;
use App\Dto\DistrictDTO;
use App\Dto\AgentDTO;
use App\Dto\AppointmentScheduleDTO;
use App\Dto\UserDTO;
use App\Models\Appoinment;
use Carbon\Carbon;

class EloquentAppointmentRepository implements AppointmentRepository
{
    public function getAll(): array
    {
        $appointments = Appoinment::all();
        $mappedAppointments = $appointments->map(function ($item) {
            return $this->mapAppointmentEloquentToDTO($item);
        });

        return $mappedAppointments->toArray();
    }

    public function getByAgentId(): array
    {
        return [];
    }

    public function getById(): ?AppointmentDTO
    {
        return null;
    }

    public function rescheduleAppointment($appointmentId, AppointmentScheduleDTO $appointmentSchedule): bool
    {
        return true;
    }

    public function approveAppointment($appointmentId, $isApproveByAgent): bool
    {
        return true;
    }

    private function mapAppointmentEloquentToDTO(Appoinment $appointmentEloquent)
    {
        $appointmentSchedules = $appointmentEloquent->appoinment_schedules->map(function ($appointmentSchedule) {
            $appointmentScheduleDto = new AppointmentScheduleDTO(
                $appointmentSchedule->id,
                Carbon::parse($appointmentSchedule->schedule),
                $appointmentSchedule->is_approved_by_agent,
                $appointmentSchedule->is_approved_by_user,
                Carbon::parse($appointmentSchedule->created_at),
                Carbon::parse($appointmentSchedule->updated_at),
            );
        });

        return new AppointmentDTO(
            $appointmentEloquent->id,
            new AgentDTO(),
            new UserDTO(),
            new DistrictDTO(),
            $appointmentSchedules,
            $appointmentEloquent->property_name,
            $appointmentEloquent->property_address,
            Carbon::now(),
            $appointmentEloquent->is_approved_by_agent,
            Carbon::parse($appointmentEloquent->created_at),
            Carbon::parse($appointmentEloquent->updated_at),
        );
    }
}
