<?php

namespace App\Repositories\Appointment;

use App\Dto\AppointmentDTO;
use App\Dto\AppointmentScheduleDTO;

interface AppointmentRepository
{
    public function getAll(): array;

    public function getByAgentId(): array;

    public function getById(): ?AppointmentDTO;

    public function rescheduleAppointment($appointmentId, AppointmentScheduleDTO $appointmentSchedule): bool;

    public function approveAppointment($appointmentId, $isApproveByAgent): bool;
}
