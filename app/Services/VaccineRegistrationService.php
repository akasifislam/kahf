<?php

namespace App\Services;

use App\Models\Admin\Patient;
use App\Models\Registrations;
use Illuminate\Support\Facades\DB;

class VaccineRegistrationService
{
    public function store(array $patientData, $centerId)
    {
        DB::transaction(function () use ($patientData, $centerId) {
            $patient = Patient::create($patientData);
            Registrations::create([
                'patient_id' => $patient->id,
                'vaccine_center_id' => $centerId,
                'status' => 'Not scheduled',
            ]);
        }, 5);
    }
}
