<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesCarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_carrito', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detalle_productos_id')->constrained('detalle_productos');
            $table->foreignId('carrito_id')->constrained('carrito');
            $table->integer('cantidad');
            $table->decimal('total', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_carrito');
    }
}
