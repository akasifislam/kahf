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
    protected $vaccineRegistrationService;

    public function __construct(VaccineRegistrationService $vaccineRegistrationService)
    {
        $this->vaccineRegistrationService = $vaccineRegistrationService;
    }

    public function index()
    {
        return view('frontend.index');
    }

    public function user_register()
    {
        $centers = VaccineCenter::latest('id')->get();
        return view('frontend.user_reg', compact('centers'));
    }



    public function user_register_store(StorePatientRequest $request)
    {
        $result = $this->vaccineRegistrationService->store($request->validated(), $request->center_id);

        return redirect()->back()->with('success', 'Registration successful! Your scheduled date is: ' . $result['scheduled_date']->format('Y-m-d'));
    }


    public function vaccine_card(Request $request)
    {
        $validated = $request->validate([
            'nid' => 'required'
        ]);
        // return $request;
        // return Registrations::first();
        $patient = Patient::with('registration.vaccinationSchedule')->where('nid', $request->nid)->first();
        return view('frontend.vaccine_card', compact('patient'));
    }
}
