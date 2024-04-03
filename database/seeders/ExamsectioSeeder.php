<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Hash;

class ExamsectioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
            'email' => 'coeoffice@git.edu',
            'password' => Hash::make('Exam@123'),
            'role' => UserRoles::EXAM_SECTION->value,
            'status' => UserStatus::ACTIVE->value
            ],

            [
                'email' => 'coe_@git.edu',
                'password' => Hash::make('Exam@123'),
                'role' => UserRoles::EXAM_SECTION->value,
                'status' => UserStatus::ACTIVE->value
             ],

             [
                'email' => 'os_examsection@git.edu',
                'password' => Hash::make('Exam@123'),
                'role' => UserRoles::EXAM_SECTION->value,
                'status' => UserStatus::ACTIVE->value
             ],

             [
                'email' => 'nw_examsection@git.edu',
                'password' => Hash::make('Exam@123'),
                'role' => UserRoles::EXAM_SECTION->value,
                'status' => UserStatus::ACTIVE->value
             ],
        ]);
    }
}
