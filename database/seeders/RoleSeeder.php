<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Admin', // optional
                'description' => 'User is the Admin', // optional
            ],
            [
                'name' => 'user',
                'display_name' => 'User', // optional
                'description' => 'User', // optional
            ],
            [
                'name' => 'employee',
                'display_name' => 'Employee', // optional
                'description' => 'Employee', // optional
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}