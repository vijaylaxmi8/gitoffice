<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Hash;

class principalofficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
            'email' => 'principaloffice@git.edu',
            'password' => Hash::make('Office@123'),
            'role' => UserRoles::PRINCIPAL_OFFICE->value,
            'status' => UserStatus::ACTIVE->value
            ],
        ]);
    }
}
