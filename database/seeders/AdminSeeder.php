<?php

namespace Database\Seeders;

use App\Models\Applicants;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Admin",
            'email' => "admin@admin.com",
            'phone' => "01303106024",
            'password' => Hash::make("admin"),
            'admin_type' => 1,
        ]);

        User::create([
            'name' => "Motiur Rahaman",
            'email' => "memotiur@gmail.com",
            'phone' => "01717849968",
            'password' => Hash::make("123456"),
            'admin_type' => 1,
        ]);

        User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'phone' => "01861472439",
            'password' => Hash::make("123456"),
            'admin_type' => 1,
        ]);


    }
}
