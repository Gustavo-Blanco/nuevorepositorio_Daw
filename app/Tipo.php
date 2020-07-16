<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tipo
 *
 * @property int $id
 * @property string $nombre
 * @property int $categoria_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Categoria|null $categoria
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Producto[] $producto
 * @property-read int|null $producto_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo whereCategoriaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tipo extends Model
{
    public function producto() {
        return $this->belongsToMany('App\Producto');
    }

    public function categoria() {
        return $this->hasOne('App\Categoria', 'id', 'categoria_id');
    }
}
