<?php

namespace Database\Seeders;

use App\Models\Admin\VaccineCenter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccineCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vaccineCenters = [
            [
                'center_name' => 'Dhaka Medical College Hospital',
                'address' => 'Shaheed Minar Road, Dhaka-1000',
                'daily_limit' => 100,
            ],
            [
                'center_name' => 'Chittagong Medical College Hospital',
                'address' => 'Gulzar Circle, Chattogram-4000',
                'daily_limit' => 75,
            ],
            [
                'center_name' => 'Sir Salimullah Medical College Hospital',
                'address' => 'Mitford Road, Dhaka-1100',
                'daily_limit' => 80,
            ],
            [
                'center_name' => 'Rajshahi Medical College Hospital',
                'address' => 'Luxmipur, Rajshahi-6000',
                'daily_limit' => 90,
            ],
            [
                'center_name' => 'Sylhet MAG Osmani Medical College Hospital',
                'address' => 'Naiorpool, Sylhet-3100',
                'daily_limit' => 60,
            ],
            [
                'center_name' => 'Mymensingh Medical College Hospital',
                'address' => 'Charpara, Mymensingh-2200',
                'daily_limit' => 85,
            ],
            [
                'center_name' => 'Khulna Medical College Hospital',
                'address' => 'Boyra Main Road, Khulna-9000',
                'daily_limit' => 50,
            ],
            [
                'center_name' => 'Barisal Sher-e-Bangla Medical College Hospital',
                'address' => 'Band Road, Barisal-8200',
                'daily_limit' => 120,
            ],
        ];

        // Insert vaccine centers into the database
        foreach ($vaccineCenters as $center) {
            VaccineCenter::create($center);
        }
    }
}
