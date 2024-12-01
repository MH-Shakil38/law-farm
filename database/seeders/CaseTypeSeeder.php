<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $services = [
            ['name' => 'Immigration', 'description' => 'General immigration services', 'status' => 1],
            ['name' => 'Asylum', 'description' => 'Asylum services', 'status' => 1],
            ['name' => 'Family based Petition', 'description' => 'Family-based petition services', 'status' => 1],
            ['name' => 'Citizenship', 'description' => 'Citizenship services', 'status' => 1],
            ['name' => 'Green Card', 'description' => 'Green card services', 'status' => 1],
            ['name' => 'SIJ Special Immigrant Juvenile', 'description' => 'Special Immigrant Juvenile services', 'status' => 1],
            ['name' => 'Waiver', 'description' => 'Waiver services', 'status' => 1],
            ['name' => 'Deportation', 'description' => 'Deportation defense services', 'status' => 1],
            ['name' => 'TPS', 'description' => 'Temporary Protected Status services', 'status' => 1],
            ['name' => 'VAWA', 'description' => 'Violence Against Women Act services', 'status' => 1],
            ['name' => 'U-Visa', 'description' => 'U-Visa services', 'status' => 1],
            ['name' => 'Daca', 'description' => 'Deferred Action for Childhood Arrivals services', 'status' => 1],
            ['name' => 'Appeal', 'description' => 'Appeals services', 'status' => 1],
            ['name' => 'Divorce', 'description' => 'Divorce legal services', 'status' => 1],
            ['name' => 'Criminal Defence', 'description' => 'Criminal defense services', 'status' => 1],
            ['name' => 'DWI', 'description' => 'Defense for Driving While Intoxicated', 'status' => 1],
            ['name' => 'DUI', 'description' => 'Defense for Driving Under the Influence', 'status' => 1],
            ['name' => 'Accident Cases', 'description' => 'General accident cases', 'status' => 1],
            ['name' => 'Construction Accident', 'description' => 'Construction accident cases', 'status' => 1],
            ['name' => 'Car Accident', 'description' => 'Car accident cases', 'status' => 1],
            ['name' => 'Bankruptcy', 'description' => 'Bankruptcy legal services', 'status' => 1],
        ];

        foreach ($services as $service) {
            DB::table('case_types')->insert(array_merge($service, [
                'created_by' => 1, // Default user ID
                'updated_by' => 1, // Default user ID
            ]));
        }
    }
}
