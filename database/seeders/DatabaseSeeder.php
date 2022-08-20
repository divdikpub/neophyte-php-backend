<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nim' => '02031911067',
            'name' => 'Romi Kusuma Bakti',
            'email' => 'romi@gmail.com',
            'password' => '1234',
            'gender' => 'L',
            'date_of_birth' => date('2001-02-02'),
        ]);
    }
}
