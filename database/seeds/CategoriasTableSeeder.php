<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres = array('Superior', 'Inferior', 'Calzado');
        $img = array('clothes.png', 'pants.png', 'boots.png');

        for ($i = 0; $i <= count($nombres) - 1; $i++) {
            DB::table('categorias')->insert([
                'nombre' => $nombres[$i],
                'img' => $img[$i]
            ]);
        }
    }
}
