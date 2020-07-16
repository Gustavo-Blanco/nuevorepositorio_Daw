<?php

use Illuminate\Database\Seeder;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $nombres = ['Pantalon', 'Casaca', 'Chompa', 'Chaleco', 'Jogger', 'Jean', 'Zapatilla'];
        $categorias_id = [2, 1, 1, 1, 2, 2, 3];

        for ($i = 0; $i <= count($nombres) - 1; $i++) {
            DB::table('tipos')->insert([
                'nombre' => $nombres[$i],
                'categoria_id' => $categorias_id[$i]
            ]);
        }*/
        $nombres = ['Pantalon', 'Casaca', 'Chompa', 'Chaleco', 'Jogger', 'Short','Jean', 'Zapatilla'];
        $categorias_id = [2, 1, 1, 1, 2, 2, 2, 3];

        for ($i = 0; $i <= count($nombres) - 1; $i++) {
            DB::table('tipos')->insert([
                'id' => $i+1,
                'nombre' => $nombres[$i],
                'categoria_id' => $categorias_id[$i]
            ]);
        }

    }
}
