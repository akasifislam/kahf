<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Models\Admin\Patient;
use App\Models\Admin\VaccineCenter;
use App\Models\Registrations;
use App\Services\VaccineRegistrationService;
use Illuminate\Http\Request;

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


    public function user_register_store(StorePatientRequest $request, VaccineRegistrationService $vaccineRegistrationService)
    {
        $vaccineRegistrationService->store($request->validated(), $request->center_id);
        return redirect()->back()->with('success', 'Registration successful!');
    }
}
