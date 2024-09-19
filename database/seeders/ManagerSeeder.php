<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Manager',
            'email' => 'info@manager.com',
            'password' => bcrypt('Password'),
        ]);

        $user->assignRole(Role::MANAGER);
    }
}
