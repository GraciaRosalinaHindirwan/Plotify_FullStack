<?php

namespace App\Dto;

use Carbon\Carbon;

class AppointmentDTO
{
    public string $id;
    public AgentDTO $agent;
    public UserDTO $seller;
    public DistrictDTO $district;
    public array $appointmentSchedules;
    public string $propertyName;
    public string $propertyAddress;
    public ?Carbon $actualTimeSchedule;
    public ?bool $isApprovedByAgent;
    public Carbon $updatedAt;
    public Carbon $createdAt;
}
