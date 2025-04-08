<?php

namespace Database\Seeders;

use App\Models\Biblioteca;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bibliotecas = [
            ['nombre' => 'CRAI UPO'],
            ['nombre' => 'Infanta Elena'],
            ['nombre' => 'US'],
            ['nombre' => 'FCEYE'],
            ['nombre' => 'Antonio Machado'],
        ];

        foreach ($bibliotecas as $biblioteca) {
            Biblioteca::create($biblioteca);
        }
    }
}
