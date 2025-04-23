<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear usuario administrador
        $adminUser = User::create([
            'name' => 'Admin Demo',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
        ]);

        // Crear usuario cliente
        $clienteUser = User::create([
            'name' => 'Cliente Demo',
            'email' => 'cliente@cliente.com',
            'password' => Hash::make('cliente123'),
        ]);

        // Llamar a los seeders y pasar user_id
        $this->callWith(AdministradorSeeder::class, ['user_id' => $adminUser->id]);
        $this->callWith(ClienteSeeder::class, ['user_id' => $clienteUser->id]);

        $this->call(ProductoSeeder::class);
    }
}
