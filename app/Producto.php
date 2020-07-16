<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Producto
 *
 * @property int $id
 * @property int $tipo_id
 * @property string $linea
 * @property float $precio
 * @property string $genero
 * @property string $color
 * @property string $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto whereGenero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto whereLinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto whereTipoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Producto whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\DetalleProductos[] $detalleProductos
 * @property-read int|null $detalle_productos_count
 * @property-read \App\Tipo|null $tipo
 */
class Producto extends Model
{
    protected $fillable = [
        'tipo_id', 'linea', 'precio', 'genero', 'color', 'img',
    ];

    public function tipo() {
        return $this->hasOne('App\Tipo', 'id', 'tipo_id');
    }

    public function detalleProductos() {
        return $this->hasMany('App\DetalleProductos');
    }
}
