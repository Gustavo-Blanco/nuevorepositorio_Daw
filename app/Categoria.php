<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Categoria
 *
 * @property int $id
 * @property string $nombre
 * @property string $img
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tipo[] $tipo
 * @property-read int|null $tipo_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria whereNombre($value)
 * @mixin \Eloquent
 */
class Categoria extends Model
{
    public function tipo() {
        return $this->belongsToMany('App\Tipo');
    }
}
