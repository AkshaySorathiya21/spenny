<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::updateOrCreate(
            ['email' => 'admin@spenny.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('Password@123'),
                'role_id' => User::ROLE_ADMIN,
                'status' => User::STATUS_ACTIVE
            ]
        );
    }
}
