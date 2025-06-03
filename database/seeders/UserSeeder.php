<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('pass'),
        ]);

        $role = Role::findByName('admin');

        if ($admin) {
            $role->users()->attach($admin);
        }
 
        $manager = User::firstOrCreate([
            'email' => 'manager@example.com',
        ], [
            'name' => 'Manager',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
        ]);

        $role = Role::findByName('manager');

        if ($manager) {
            $role->users()->attach($manager);
        }

        $client = User::firstOrCreate([
            'email' => 'client@example.com',
        ], [
            'name' => 'Client',
            'email' => 'client@example.com',
            'password' => Hash::make('password'),
        ]);
        
        $role = Role::findByName('client');
        
        if ($client) {
            $role->users()->attach($client);
        }
    }
}
