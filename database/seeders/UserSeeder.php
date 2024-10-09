<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = Role::create([
            'slug' => 'super-admin',
            'name' => 'Super Admin',
        ]);

        $user1 = User::create([
            'role_id' => $superadmin->id,
            'name' => 'Raphael',
            'email' => 'raphaeldanu@gmail.com',
            'password' => Hash::make('op[kl;m,.'),

        ]);
    }
}
