<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;

class CategoriaProductoSeeder extends Seeder
{
    public function run(): void
    {
        $categoriaEl = Categoria::where('nombre', 'Para él')->first();
        $categoriaElla = Categoria::where('nombre', 'Para ella')->first();
        $categoriaPareja = Categoria::where('nombre', 'Para parejas')->first();
        $categoriaAtrevidos = Categoria::where('nombre', 'Atrevidos')->first();


        Producto::find(1)?->categorias()->sync([
            $categoriaElla->id,
            $categoriaPareja->id
        ]);

        Producto::find(2)?->categorias()->sync([
            $categoriaElla->id
        ]);

        Producto::find(3)?->categorias()->sync([
            $categoriaEl->id
        ]);

        Producto::find(4)?->categorias()->sync([
            $categoriaEl->id
        ]);

        Producto::find(5)?->categorias()->sync([
            $categoriaElla->id,
            $categoriaAtrevidos->id
        ]);

        Producto::find(6)?->categorias()->sync([
            $categoriaElla->id,
            $categoriaAtrevidos->id
        ]);

        Producto::find(7)?->categorias()->sync([
            $categoriaEl->id,
            $categoriaAtrevidos->id
        ]);

        Producto::find(8)?->categorias()->sync([
            $categoriaEl->id
        ]);

        Producto::find(9)?->categorias()->sync([
            $categoriaPareja->id,
            $categoriaAtrevidos->id
        ]);

        Producto::find(10)?->categorias()->sync([
            $categoriaPareja->id,
            $categoriaAtrevidos->id
        ]);
    }
}
