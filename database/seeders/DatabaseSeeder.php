<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategoriaSeeder::class,
            ProductoSeeder::class,
            CategoriaProductoSeeder::class,
            UsuarioClienteAdminSeeder::class,
        ]);
    }
}
