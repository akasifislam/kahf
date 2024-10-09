<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVaccineCenterRequest;
use App\Models\Admin\VaccineCenter;
use App\Services\VaccineCenterService;
use Illuminate\Http\Request;

class VaccineCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.vaccine.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vaccine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVaccineCenterRequest $request, VaccineCenterService $vaccinecenterservice)
    {
        $vaccinecenterservice->store($request->validated());
        return redirect()->back()->with(['success' => 'Center Create']);
    }

    /**
     * Display the specified resource.
     */
    public function show(VaccineCenter $vaccineCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VaccineCenter $vaccineCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VaccineCenter $vaccineCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VaccineCenter $vaccineCenter)
    {
        //
    }
}
