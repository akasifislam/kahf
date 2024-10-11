<?php

namespace App\Services;

use App\Models\Admin\Patient;
use App\Models\Admin\VaccineCenter;
use App\Models\Registrations;
use App\Models\VaccinationSchedule;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VaccineRegistrationService
{
    /**
     *
     * @param int 
     * @return \Carbon\Carbon
     */
    private function determineScheduleDate($centerId)
    {
        $center = VaccineCenter::findOrFail($centerId);
        $date = Carbon::today();
        while (true) {
            if ($date->dayOfWeek === Carbon::FRIDAY || $date->dayOfWeek === Carbon::SATURDAY) {
                $date->addDay();
                continue;
            }

            $registrationCount = Registrations::where('vaccine_center_id', $centerId)
                ->whereDate('scheduled_date', $date)
                ->count();

            if ($registrationCount < $center->daily_limit) {
                return $date;
            }
            $date->addDay();
        }
    }

    /**
     * Store a new vaccine registration.
     *
     * @param array 
     * @param int 
     * @return array 
     */
    public function store(array $patientData, $centerId)
    {
        return DB::transaction(function () use ($patientData, $centerId) {
            $patient = Patient::create($patientData);
            $scheduledDate = $this->determineScheduleDate($centerId);

            $registration = Registrations::create([
                'patient_id' => $patient->id,
                'vaccine_center_id' => $centerId,
                'status' => 'Scheduled',
                'scheduled_date' => $scheduledDate,
            ]);

            VaccinationSchedule::create([
                'registration_id' => $registration->id,
                'scheduled_date' => $scheduledDate,
                'notified_at' => $this->calculateNotificationTime($scheduledDate),
            ]);

            return [
                'patient' => $patient,
                'registration' => $registration,
                'scheduled_date' => $scheduledDate,
            ];
        }, 5);
    }

    private function calculateNotificationTime($scheduledDate)
    {
        $notificationTime = Carbon::parse($scheduledDate)->subDay()->setTime(21, 0);
        if ($notificationTime->dayOfWeek === Carbon::FRIDAY) {
            $notificationTime->subDay();
        }
        return $notificationTime;
    }
}
