<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'create-workflow-events']);
        Permission::create(['name' => 'edit-workflow-events']);
        Permission::create(['name' => 'delete-workflow-events']);

        Permission::create(['name' => 'evaluate-workflow-events']);

        Permission::create(['name' => 'submit-proposals']);

        $adminRole = Role::create(['name' => 'Admin']);
        $sharkRole = Role::create(['name' => 'Shark']);
        $fishRole = Role::create(['name' => 'Fish']);

        $adminRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'create-workflow-events',
            'edit-workflow-events',
            'delete-workflow-events',
            'evaluate-workflow-events',
            'submit-proposals',
        ]);

        $sharkRole->givePermissionTo([
            'evaluate-workflow-events',
        ]);

        $fishRole->givePermissionTo([
            'submit-proposals',
        ]);
    }
}
