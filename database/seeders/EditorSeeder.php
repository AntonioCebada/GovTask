<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verifica si ya existe un rol "admin"
        $editorRole = Role::firstOrCreate(['name' => 'editor']);

        // Verifica si ya existe un usuario con el email del admin
        if (!User::where('email', 'editor@editor.com')->exists()) {
            User::create([
                'name' => 'EditorPrueba',
                'email' => 'editor@editor.com',
                'password' => Hash::make('editor'), // Puedes cambiarlo luego
                'role_id' => $editorRole->id,
            ]);
        }
    }
}
