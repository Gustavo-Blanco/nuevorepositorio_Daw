<?php

namespace App;

class Carrito
{
    public $productos = null;
    public $cantidadTotal = 0;
    public $precioTotal = 0;

    public function __construct($carritoViejo)
    {
        if ($carritoViejo) {
            $this->productos = $carritoViejo->productos;
            $this->cantidadTotal = $carritoViejo->cantidaTotal;
            $this->precioTotal = $carritoViejo->precioTotal;
        }

    }

    public function add($producto, $id)
    {
        $productoGuardado = [
            'cantidad' => 0,
            'precio' => $producto->precio,
            'producto' => $producto
        ];

        if ($this->productos) {
            if (array_key_exists($id, $this->productos)) {
                $productoGuardado = $this->productos[$id];
            }
        }
        $productoGuardado['cantidad']++;
        $productoGuardado['precio'] = $producto->precio * $productoGuardado['cantidad'];
        $this->productos[$id] = $productoGuardado;
        $this->cantidadTotal++;
        $this->precioTotal += $producto->precio;
    }
}
