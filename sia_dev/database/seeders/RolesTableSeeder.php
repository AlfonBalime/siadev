<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        // Define the roles data with unique UUIDs
        $roles = [
            [
                'id_roles' => '6d2f6e72-bc3e-4e93-b2bb-fc6f4b3b7dbe',
                'role_name' => 'Read',
                'description' => 'Consultas',
                'created_at' => $now,
                'updated_at' => null,
            ],
            [
                'id_roles' => '8e6e4d7b-02d3-4f84-9e6e-64f79d5277f3',
                'role_name' => 'Extract',
                'description' => 'Equipa Relatório',
                'created_at' => $now,
                'updated_at' => null,
            ],
            [
                'id_roles' => 'b8c4d4be-d9e0-4a2e-bc6b-0b8c1e3c1e4d',
                'role_name' => 'Update',
                'description' => 'Funcionário Normal',
                'created_at' => $now,
                'updated_at' => null,
            ],
            [
                'id_roles' => 'a5d5b9e1-f78c-4d4f-a1e8-0e2b5d4e6f0d',
                'role_name' => 'Admin',
                'description' => 'Administrador',
                'created_at' => $now,
                'updated_at' => null,
            ],
            [
                'id_roles' => 'e2e9b9b8-02e9-4b8e-9e0b-3c6d7e2b8f6d',
                'role_name' => 'Create',
                'description' => 'Gestor',
                'created_at' => $now,
                'updated_at' => null,
            ],
            [
                'id_roles' => 'e3c8b9b8-2d7b-4e0f-9e2d-6b7f8e0a9d6d',
                'role_name' => 'Delete',
                'description' => 'Funcionário Experiência',
                'created_at' => $now,
                'updated_at' => null,
            ],
        ];

        // Insert roles into the database
        DB::table('roles')->insert($roles);

        $this->command->info('Roles table seeded successfully!');
    }
}
