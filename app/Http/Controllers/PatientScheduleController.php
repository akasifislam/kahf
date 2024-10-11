<?php

namespace App\Http\Controllers;

use App\Models\Admin\Patient;
use App\Models\Admin\VaccineCenter;
use App\Models\Registrations;
use App\Models\VaccinationSchedule;
use Illuminate\Http\Request;

class PatientScheduleController extends Controller
{
    public function index()
    {
        // return Registrations::with('vaccinationSchedule')->get();
        // return VaccinationSchedule::all();
        $patients = Patient::with('registration.vaccinationSchedule')->latest('id')->paginate(10);
        return view('admin.patient-schedule.index', compact('patients'));
    }
}
