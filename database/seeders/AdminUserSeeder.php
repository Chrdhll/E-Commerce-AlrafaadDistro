<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'admin@distro.com',
        ], [
            'name' => 'Fadhil Admin',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
    }
}
