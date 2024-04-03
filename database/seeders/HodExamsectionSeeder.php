<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Hash;

class HodExamsectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert
        ([
            [
                'email' => 'coeoffice@git.edu',
                'password' => Hash::make('Office@123'),
                'role' => UserRoles::HOD->value,
                'status' => UserStatus::ACTIVE->value
            ],
        ]);
    }
}
