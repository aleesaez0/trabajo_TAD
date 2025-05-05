<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'id' => 1,
                'nombre' => 'Satisfyer Pro 2 Generación 2 - Dorado',
                'descripcion' => 'Estimulación por presión de aire: la forma más innovadora de estimular el clítoris. Especialmente eficaz. Además previene la sobreestimulación. El estimulador de clítoris más popular con las mejores opiniones.',
                'precio' => 37.99,
                'stock' => 10,
                'imagen' => 'https://eqomcdn.com/content/photos/products/satisfyer/27673/1693913311.stf002_13.jpg?w=320&q=90',
                'categoria_id' => 3,
            ],
            [
                'id' => 2,
                'nombre' => 'Masajeador MyMagicWand - Rosa',
                'descripcion' => 'Descubre MyMagicWand, un masajeador de clítoris potente y elegante que transformará tu experiencia de placer. Con un motor extra potente y 6 configuraciones de vibración ajustables, este masajeador de alta gama es fácil de controlar con un simple botón. Diseño ergonómico, enchufe europeo y funda de silicona suave. Fácil de limpiar.',
                'precio' => 89.99,
                'stock' => 8,
                'imagen' => 'https://eqomcdn.com/content/photos/products/mymagicwand/27826/1625143875.MMW001PNK.jpg?w=320&q=90',
                'categoria_id' => 3,
            ],
            [
                'id' => 3,
                'nombre' => 'Masturbador automático con forma de vagina - Easy Choice',
                'descripcion' => 'Abertura con forma de vagina. 4 velocidades. Con sensual voz de mujer. Mango suave. Diseño estilizado.',
                'precio' => 69.99,
                'stock' => 15,
                'imagen' => 'https://eqomcdn.com/content/photos/products/easy-choice/39067/1625152645.ET-ST-003.jpg?w=200&q=90',
                'categoria_id' => 2,
            ],
            [
                'id' => 4,
                'nombre' => 'Kit Masturbador Teazers',
                'descripcion' => 'Sácale aún más partido al masturbador de Teazers. Set ideal para tu primer masturbador. Lubricante y limpiador apto para veganxs.',
                'precio' => 59.99,
                'stock' => 22,
                'imagen' => 'https://eqomcdn.com/content/photos/products/misc/66082/1686150370.cbmbt6_2.jpg?w=200&q=90',
                'categoria_id' => 3,
            ],
            [
                'id' => 5,
                'nombre' => 'Cadena de Cuerpo de Máscara - Oro',
                'descripcion' => '¡Este elegante collar seguramente llamará la atención! La cadena dorada para el cuerpo cuenta con el logotipo de Christine con la icónica máscara. ¡Llévalo con un atuendo sexy y siéntete irresistible!',
                'precio' => 1.99,
                'stock' => 50,
                'imagen' => 'https://eqomcdn.com/content/photos/products/christine-le-duc/66701/1719823574.cld-bodychain-mask_5.jpg?w=800&q=90',
                'categoria_id' => 4,
            ],
            [
                'id' => 6,
                'nombre' => 'Mini vestido Duo Net con mangas negro',
                'descripcion' => 'Vestido elástico. Material muy elástico. Corte y ajuste bonitos. Apariencia provocativa. Color: Negro. Material: 8% Elastano, 92% Nylon. Modelo: Unicolor. Tanga: No incluido.',
                'precio' => 17.99,
                'stock' => 70,
                'imagen' => 'https://eqomcdn.com/content/photos/products/le-desir/63394/1652775979.DES010BLKOS_4.jpg?w=800&q=90',
                'categoria_id' => 3,
            ],
            [
                'id' => 7,
                'nombre' => 'AirDoll Margot Rubme',
                'descripcion' => 'Muñeca de tamaño real. Inflable. 3 orificios (boca, vagina, ano). Fácil de almacenar. Muñeca erguida.',
                'precio' => 26.99,
                'stock' => 20,
                'imagen' => 'https://eqomcdn.com/content/photos/products/airdoll/75703/1705485111.ad001_4.jpg?w=200&q=90',
                'categoria_id' => 2,
            ],
            [
                'id' => 8,
                'nombre' => 'Kokos - Onahole Edition 004 Double Layer Masturbador',
                'descripcion' => 'Ultra realista. Basado en una vagina real. Material suave y flexible. Con punto G, punto A y punto P. Tecnología de doble capa.',
                'precio' => 69.99,
                'stock' => 15,
                'imagen' => 'https://eqomcdn.com/content/photos/products/kokos/94387/1736428375.120039-beige_3.jpg?w=200&q=90',
                'categoria_id' => 2,
            ],
            [
                'id' => 9,
                'nombre' => 'Dildo realista Elvin - 27,5 cm',
                'descripcion' => 'Diseño realista. Juguete sexual XL. Glande redondo. Eje flexible y veteado. Con ventosa.',
                'precio' => 39.99,
                'stock' => 25,
                'imagen' => 'https://eqomcdn.com/content/photos/products/real-fantasy/32919/1625147460.RF013SKN.jpg?w=200&q=90',
                'categoria_id' => 1,
            ],
            [
                'id' => 10,
                'nombre' => 'Plug anal metálico con piedra rosa - S',
                'descripcion' => 'Plug anal metálico. Fácil de limpiar. Cuello estrecho. Se puede usar frío y caliente. Con piedra rosa.',
                'precio' => 11.99,
                'stock' => 10,
                'imagen' => 'https://eqomcdn.com/content/photos/products/easytoys-anal-collection/25457/1625142340.ET124PNK.jpg?w=200&q=90',
                'categoria_id' => 3,
            ],
        ]);
    }
}
