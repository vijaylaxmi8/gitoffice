<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
            'email' => 'itcell@git.edu',
            'password' => Hash::make('admin123'),
            'role' => UserRoles::SU->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'os_estb@git.edu',
            'password' => Hash::make('os_estb123'),
            'role' => UserRoles::ESTB->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email'=>'os_admin@git.edu',
            'password' => Hash::make('os_admin123'),
            'role' => UserRoles::ADMISSION->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email'=>'os_accts@git.edu',
            'password' => Hash::make('os_accts123'),
            'role' => UserRoles::ACCOUNTS->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email'=>'dean_rnd@git.edu',
            'password' => Hash::make('password'),
            'role' => UserRoles::DEANRND->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email'=>'dean_rnd@git.edu',
            'password' => Hash::make('password'),
            'role' => UserRoles::DEANRND->value,
            'status' => UserStatus::ACTIVE->value
        ],
        
        ]);
    }
}
