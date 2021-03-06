<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Role;

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
                'name'         => 'administrator',
                'display_name' => 'Administrador',
                'description'  => 'Administrador'
            ],
            [
                'name'         => 'employee',
                'display_name' => 'Funcionário',
                'description'  => 'Funcionário'
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
