<?php

use Illuminate\Database\Seeder;
use App\DetalleProductos;

class DetalleProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DetalleProductos::create([
            'producto_id' => 1,
            'talla' => 'S',
            'stock' => 5
        ]);

        DetalleProductos::create([
            'producto_id' => 1,
            'talla' => 'M',
            'stock' => 3
        ]);

        DetalleProductos::create([
            'producto_id' => 1,
            'talla' => 'L',
            'stock' => 2
        ]);
        */
        $talla = ['S','M','L','Xl'];

        for ($i=1; $i <= 16; $i++) {
            $random = rand(1,4);
            for ($a=1; $a <=$random ; $a++) {
                DB::table('detalle_productos')->insert([
                    'producto_id' => $i,
                    'talla'=>$talla[rand(0,3)],
                    'stock'=>rand(1,15)
                ]);
            }
        }
    }
}
