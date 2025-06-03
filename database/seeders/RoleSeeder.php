<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionAddUsers = Permission::firstOrCreate(['name' => 'add users']);
        $permissionEditUsers = Permission::firstOrCreate(['name' => 'edit users']);
        $permissionAddNews = Permission::firstOrCreate(['name' => 'add news']);
        $permissionEditNews = Permission::firstOrCreate(['name' => 'edit news']);

        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $managerRole = Role::firstOrCreate(['name' => 'manager']);
        Role::firstOrCreate(['name' => 'client']);

        $adminRole->givePermissionTo($permissionAddUsers, $permissionEditUsers, $permissionAddNews, $permissionEditNews);
        $managerRole->givePermissionTo($permissionAddNews, $permissionEditNews);
    }
}
