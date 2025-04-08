<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\Usuario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personas = Persona::take(5)->get();

        foreach ($personas as $index => $persona) {
            Usuario::create([
                'fk_persona' => $persona->id,
            ]);
        }
    }
}
