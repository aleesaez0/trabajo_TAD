<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\PersonaSeeder;
use Database\Seeders\BibliotecaSeeder;
use Database\Seeders\UsuarioSeeder;
use Database\Seeders\BibliotecarioSeeder;
use Database\Seeders\LibroSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            PersonaSeeder::class,
            BibliotecaSeeder::class,
            UsuarioSeeder::class,
            BibliotecarioSeeder::class,
            LibroSeeder::class,
        ]);
    }
}
