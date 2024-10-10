<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Models\Admin\Patient;
use App\Models\Admin\VaccineCenter;
use App\Models\Registrations;
use App\Models\VaccinationSchedule;
use App\Services\VaccineRegistrationService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function user_register()
    {
        $centers = VaccineCenter::latest('id')->get();
        return view('frontend.user_reg', compact('centers'));
    }


    public function determineScheduleDate($centerId)
    {
        $center = VaccineCenter::findOrFail($centerId);
        $date = Carbon::today();
        while (true) {
            $registrationCount = Registrations::where('vaccine_center_id', $centerId)
                ->whereDate('scheduled_date', $date)
                ->count();

            if ($registrationCount < $center->daily_limit) {
                return $date;
            }
            $date->addDay();
        }
    }

    public function user_register_store(StorePatientRequest $request)
    {
        $patient = Patient::create($request->validated());

        $scheduledDate = $this->determineScheduleDate($request->center_id);

        // Create registrations
        $registration = Registrations::create([
            'patient_id' => $patient->id,
            'vaccine_center_id' => $request->center_id,
            'status' => 'Scheduled',
            'scheduled_date' => $scheduledDate,
        ]);

        VaccinationSchedule::create([
            'registration_id' => $registration->id,
            'scheduled_date' => $scheduledDate,
            'notified_at' => Carbon::parse($scheduledDate)->subDay()->setTime(21, 0),
        ]);

        return redirect()->back()->with('success', 'Registration successful! Your scheduled date is: ' . $scheduledDate->format('Y-m-d'));
    }


    // public function user_register_store(StorePatientRequest $request, VaccineRegistrationService $vaccineRegistrationService)
    // {
    //     $vaccineRegistrationService->store($request->validated(), $request->center_id);
    //     return redirect()->back()->with('success', 'Registration successful!');
    // }
}
