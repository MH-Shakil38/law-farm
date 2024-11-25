<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '1111111111',
                'phone1' => '2222222222',
                'specialization' => 'Administration',
                'lawyer_type' => null,
                'address' => '123 Admin Lane, Admin City',
                'image' => 'admin_user.jpg',
                'file' => null,
                'user_type' =>1,
                'isActive' => 1,
                'role_id' => 1,
                'ip' => '127.0.0.1',
                'password' => Hash::make('admin123'),
                'created_by' => null,
                'updated_by' => null,
            ],
            [
                'name' => 'John Doe',
                'username' => 'johndoe',
                'email' => 'johndoe@gmail.com',
                'phone' => '3333333333',
                'phone1' => null,
                'specialization' => 'Corporate Law',
                'lawyer_type' => 2,
                'address' => '456 Corporate St, Business City',
                'image' => 'john_doe.jpg',
                'file' => 'john_doe_resume.pdf',
                'isActive' => 1,
                'role_id' => 2,
                'user_type' =>2,
                'ip' => '192.168.1.100',
                'password' => Hash::make('password123'),
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'name' => 'Jane Smith',
                'username' => 'janesmith',
                'email' => 'janesmith@gmail.com',
                'phone' => '4444444444',
                'phone1' => '5555555555',
                'specialization' => 'Family Law',
                'lawyer_type' => 3,
                'address' => '789 Family Ave, Legal Town',
                'image' => 'jane_smith.jpg',
                'file' => 'jane_smith_resume.pdf',
                'isActive' => 1,
                'role_id' => 3,
                'user_type' =>3,
                'ip' => '192.168.1.101',
                'password' => Hash::make('securepass'),
                'created_by' => 1,
                'updated_by' => 1,
            ]
        ]);
    }
}
