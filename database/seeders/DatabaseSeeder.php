<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            [
            'email' => 'egov_cv@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_cs@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_at@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_ae@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_ec@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_ee@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_is@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_me@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_mba@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_mca@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_phy@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_math@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        [
            'email' => 'egov_chem@git.edu',
            'password' => Hash::make('egov_admin'),
            'role' => UserRoles::EGOV_ADMIN->value,
            'status' => UserStatus::ACTIVE->value
        ],
        
        ]);
    }
}
