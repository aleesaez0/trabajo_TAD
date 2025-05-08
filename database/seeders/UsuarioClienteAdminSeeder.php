<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Administrador;

class UsuarioClienteAdminSeeder extends Seeder
{
    public function run(): void
    {
        $adminUser = User::create([
            'name' => 'Admin Demo',
            'email' => 'proyectotad55+admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        Administrador::create([
            'user_id' => $adminUser->id,
        ]);

        $clienteUser = User::create([
            'name' => 'Cliente Demo',
            'email' => 'proyectotad55+cliente@gmail.com',
            'password' => Hash::make('cliente123'),
        ]);

        Cliente::create([
            'user_id' => $clienteUser->id,
        ]);
    }
}
