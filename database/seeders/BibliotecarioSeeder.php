<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\Biblioteca;
use App\Models\Bibliotecario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BibliotecarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personas = Persona::skip(5)->take(5)->get();
        $bibliotecas = Biblioteca::all();

        foreach ($personas as $index => $persona) {
            Bibliotecario::create([
                'fk_persona' => $persona->id,
                'fk_biblioteca' => $bibliotecas[$index % count($bibliotecas)]->id,
            ]);
        }
    }
}
