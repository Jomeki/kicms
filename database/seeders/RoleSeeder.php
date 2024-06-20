<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' =>'Information Officer', 'description' => 'Has the privilege of accessing (create, view and edit) and overseeing the system\'s records'],
            ['name' =>'Chairperson', 'description' => 'Has the privilege of accessing (create, view and edit) and overseeing the system\'s records'],
            ['name' =>'Vice Chairperson', 'description' => 'Has the privilege of accessing (create, view and edit) and overseeing the system\'s records'],
            ['name' =>'Secretary', 'description' => 'Has the privilege of accessing (create, view and edit) and overseeing the system\'s records'],
            ['name' =>'Vice Secretary', 'description' => 'Has the privilege of accessing (create, view and edit) and overseeing the system\'s records'],
            ['name' =>'Normal User', 'description' => 'Can only view records related to specific user'],
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role['name'],
                'description' => $role['description'],
                ]);
        }
    }
}
