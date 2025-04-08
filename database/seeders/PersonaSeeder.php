<?php

namespace Database\Seeders;

use App\Models\Persona;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personas = [
            ['nombre' => 'Juan Pérez', 'edad' => 28],
            ['nombre' => 'María García', 'edad' => 35],
            ['nombre' => 'Carlos López', 'edad' => 42],
            ['nombre' => 'Ana Martínez', 'edad' => 25],
            ['nombre' => 'Luis Rodríguez', 'edad' => 31],
            ['nombre' => 'Sofía Hernández', 'edad' => 22],
            ['nombre' => 'Pedro Díaz', 'edad' => 45],
            ['nombre' => 'Laura Sánchez', 'edad' => 29],
            ['nombre' => 'Jorge Ramírez', 'edad' => 38],
            ['nombre' => 'Elena Castro', 'edad' => 27],
        ];

        foreach ($personas as $persona) {
            Persona::create($persona);
        }
    }
}
