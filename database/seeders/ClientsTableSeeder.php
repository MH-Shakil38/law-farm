<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $data = [];
        for ($i = 0; $i < 200; $i++) {
            $data[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'phone2' => $faker->optional()->phoneNumber,
                'address' => $faker->address,
                'city' => $faker->city,
                'state' => $faker->state,
                'zip_code' => $faker->postcode,
                'country' => $faker->country,
                'case_type' => $faker->optional()->randomDigitNotZero(),
                'case_number' => 'C-' . $faker->unique()->numberBetween(1000, 9999),
                'lawyer_id' => 3,
                'case_details' => $faker->optional()->text(200),
                'short_details' => $faker->optional()->text(100),
                'hearing_date' => $faker->optional()->date(),
                'hearing_time' => $faker->optional()->time(),
                'date_of_birth' => $faker->optional()->date(),
                'nationality' => $faker->optional()->country,
                'passport_number' => $faker->optional()->regexify('[A-Z]{1}[0-9]{8}'),
                'status' => $faker->randomElement(['1', '0']),
                'image' => 'default.jpg',
                'ref_by' => $faker->optional()->name,
                'direction' => $faker->randomElement(['North', 'South', 'East', 'West']),
                'gender' => $faker->randomElement(['Male', 'Female', 'Other']),
                'marrital_status' => $faker->randomElement(['Single', 'Married', 'Divorced']),
                'created_by' => $faker->numberBetween(1, 5),
                'updated_by' => $faker->numberBetween(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('clients')->insert($data);
    }
}
