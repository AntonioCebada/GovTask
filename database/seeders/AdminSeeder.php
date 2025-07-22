<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verifica si ya existe un rol "admin"
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Verifica si ya existe un usuario con el email del admin
        if (!User::where('email', 'admin@admin.com')->exists()) {
            User::create([
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'), // Puedes cambiarlo luego
                'role_id' => $adminRole->id,
            ]);
        }
    }
}
