<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('admin_users')->insert(
            [
            'username' => 'superadmin',
            'firstname' => 'superadmin',
            'lastname' => 'superadmin',
            'email' => 'super@admin.com',
            'password' => Hash::make('superadmin'),
            'role_id' => Role::where('name','administrator')->first()->id
            ]
        );
    }
}
