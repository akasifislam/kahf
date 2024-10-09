<?php

namespace App\Services;

use App\Models\Admin\VaccineCenter;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;

class VaccineCenterService
{
    public function store(array $data, $image = null)
    {
        DB::transaction(function () use ($data, $image) {
            return VaccineCenter::create([
                'center_name' => $data['center_name'],
                'address' => $data['address'],
                'daily_limit' => $data['daily_limit'],
            ]);
        }, 5);
    }
}
