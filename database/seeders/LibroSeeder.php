<?php

namespace Database\Seeders;

use App\Models\Biblioteca;
use App\Models\Usuario;
use App\Models\Libro;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bibliotecas = Biblioteca::all();
        $usuarios = Usuario::all();

        $libros = [
            ['titulo' => 'El Principito', 'autor' => 'Antoine de Saint-Exupéry'],
            ['titulo' => 'Cien años de soledad', 'autor' => 'Gabriel García Márquez'],
            ['titulo' => 'Don Quijote de la Mancha', 'autor' => 'Miguel de Cervantes'],
            ['titulo' => '1984', 'autor' => 'George Orwell'],
            ['titulo' => 'Orgullo y prejuicio', 'autor' => 'Jane Austen'],
            ['titulo' => 'Crimen y castigo', 'autor' => 'Fiódor Dostoyevski'],
            ['titulo' => 'El señor de los anillos', 'autor' => 'J.R.R. Tolkien'],
            ['titulo' => 'Harry Potter y la piedra filosofal', 'autor' => 'J.K. Rowling'],
            ['titulo' => 'La sombra del viento', 'autor' => 'Carlos Ruiz Zafón'],
            ['titulo' => 'Rayuela', 'autor' => 'Julio Cortázar'],
        ];

        foreach ($libros as $index => $libroData) {
            $biblioteca = $bibliotecas[$index % count($bibliotecas)];

            $libro = Libro::create([
                'titulo' => $libroData['titulo'],
                'autor' => $libroData['autor'],
                'prestado' => false,
                'fk_biblioteca' => $biblioteca->id,
                'fk_usuario' => null,
            ]);

            if ($index % 3 === 0 && count($usuarios) > 0) {
                $libro->update([
                    'prestado' => true,
                    'fk_usuario' => $usuarios->random()->id,
                ]);
            }
        }
    }
}
