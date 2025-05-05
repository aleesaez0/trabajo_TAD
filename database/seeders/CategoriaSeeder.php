<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'id' => 1,
                'nombre' => 'Sin categoría',	
            ],
            [
                'id' => 2,
                'nombre' => 'Para él',
            ],
            [
                'id' => 3,
                'nombre' => 'Para ella',
            ],
            [
                'id' => 4,
                'nombre' => 'Para parejas',
            ],
            [
                'id' => 5,
                'nombre' => 'Atrevidos',
            ],
        ]);
    }
}
