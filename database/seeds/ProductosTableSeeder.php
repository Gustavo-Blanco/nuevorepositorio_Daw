<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        /************PRODUCTOS************/
        /*
        DB::table('productos')->insert([
            'id' => 1,
            'tipo_id' => 1,
            'linea'=>'Human',
            'precio'=>143,
            'genero'=>'M',
            'color'=>'Beige',
            'img'=>'https://www.gzuck.com/upload/productos-thumb/pantalon-human-drill-beige-gzuck-1.jpg'
        ]);
        DB::table('productos')->insert([
            'id' => 2,
            'tipo_id' => 2,
            'linea'=>'Fever',
            'precio'=>279,
            'genero'=>'F',
            'color'=>'Black Print',
            'img'=>'https://www.gzuck.com/upload/productos-thumb/casaca-fever-black-print-gzuck-1.jpg'
        ]);
        DB::table('productos')->insert([
            'id' => 3,
            'tipo_id' => 3,
            'linea'=>'Carel',
            'precio'=>139,
            'genero'=>'F',
            'color'=>'Melange',
            'img'=>'https://www.gzuck.com/upload/productos-thumb/chompa-carel-melange-gzuck-1.jpg'
        ]);
        DB::table('productos')->insert([
            'id' => 4,
            'tipo_id' => 3,
            'linea'=>'Dest',
            'precio'=>135,
            'genero'=>'F',
            'color'=>'Iron',
            'img'=>'https://www.gzuck.com/upload/productos-thumb/chompa-dest-iron-gzuck-1.jpg'
        ]);
        DB::table('productos')->insert([
            'id' => 5,
            'tipo_id' => 4,
            'linea'=>'Zacock',
            'precio'=>200,
            'genero'=>'M',
            'color'=>'Dark acero',
            'img'=>'https://www.gzuck.com/upload/productos-thumb/chaleco-zacok-black-gzuck-1.jpg'
        ]);
        DB::table('productos')->insert([
            'id' => 6,
            'tipo_id' => 2,
            'linea'=>'Cithol',
            'precio'=>100,
            'genero'=>'M',
            'color'=>'White',
            'img'=>'https://www.gzuck.com/upload/productos-thumb/chaleco-zacok-black-gzuck-1.jpg'
        ]);*/

        $linea = ['Human', 'Fever', 'Carel', 'Dest', 'Zacok', 'Cithol', 'Jokvinx','Stevx','Andy','Rihans','Flowe','Last riot','Paigge','Shoppy','Hamson','Hudson'];
        $precio = [143,279,139,135,209,100,151,159,100,60,80,143,120,119,200,159];
        $color = ['Beige','Black print','Melange','Iron','Dark Acero','White','Charcoal','Beige','Blue','Acero','Cristal Stratch','Arena','Stone','Sky','Grey Gum','Black'];
        $tipos_id = [1,2,3,3,4,2,5,5,2,6,6,7,1,1,8,8];
        $genero = ['m','f','u'];
        /************PRODUCTOS************/

        for ($i=0; $i <= count($linea) - 1 ; $i++) {
            DB::table('productos')->insert([
                'id' => $i+1,
                'tipo_id' => $tipos_id[$i],
                'linea'=>$linea[$i],
                'precio'=>$precio[$i],
                'genero'=>$genero[rand(0,2)],
                'color'=>$color[$i],
                'img'=>'img'.($i+1).'.jpg'
            ]);
        }

    }
}
