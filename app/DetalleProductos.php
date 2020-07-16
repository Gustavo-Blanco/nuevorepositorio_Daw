<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\DetalleProductos
 *
 * @property int $id
 * @property int $producto_id
 * @property string $talla
 * @property int $stock
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Producto|null $producto
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetalleProductos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetalleProductos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetalleProductos query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetalleProductos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetalleProductos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetalleProductos whereProductoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetalleProductos whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetalleProductos whereTalla($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetalleProductos whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DetalleProductos extends Model
{
    protected $fillable = [
        'producto_id', 'talla', 'stock'
    ];

    public function producto() {
        return $this->hasOne('App\Producto');
    }
}
