<?php

namespace App\Repositories\Appointment;

use App\Dto\AppointmentDTO;

interface AppointmentRepository
{
    public function getAll(): array;

    public function getByAgentId(): array;

    public function getById(): ?AppointmentDTO;
}
