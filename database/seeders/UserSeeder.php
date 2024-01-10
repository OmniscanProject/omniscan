<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'firstname' => 'superadmin',
            'lastname' => 'superadmin',
            'email' => 'super@admin.com',
            'password' => Hash::make('superadmin'),
            'role_id' => 3
        ]);
    }
}
