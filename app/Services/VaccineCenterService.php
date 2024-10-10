<?php

namespace App\Services;

use App\Models\Admin\VaccineCenter;
use Illuminate\Support\Facades\DB;

class VaccineCenterService
{
    public function store(array $data)
    {
        DB::transaction(function () use ($data) {
            return VaccineCenter::create([
                'center_name' => $data['center_name'],
                'address' => $data['address'],
                'daily_limit' => $data['daily_limit'],
            ]);
        }, 5);
    }
}
