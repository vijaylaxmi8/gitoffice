<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Hash;

class HodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
            'email' => 'hodcivil@git.edu',
            'password' => Hash::make('hod_civil'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodcse@git.edu',
            'password' => Hash::make('hod_cse'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodarch@git.edu',
            'password' => Hash::make('hod_arch'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodaero@git.edu',
            'password' => Hash::make('hod_aero'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodec@git.edu',
            'password' => Hash::make('hod_ec'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodee@git.edu',
            'password' => Hash::make('hod_ee'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodise@git.edu',
            'password' => Hash::make('hod_ise'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodmech@git.edu',
            'password' => Hash::make('hod_mech'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'deanmba@git.edu',
            'password' => Hash::make('dean_mba'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodmca@git.edu',
            'password' => Hash::make('hod_mca'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodphy@git.edu',
            'password' => Hash::make('hod_phy'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodmaths@git.edu',
            'password' => Hash::make('hod_maths'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'hodchem@git.edu',
            'password' => Hash::make('hod_chem'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
        ],
        
        ]);
    }
}
