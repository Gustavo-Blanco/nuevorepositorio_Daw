<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Roles
 *
 * @property int $id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roles query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roles whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roles whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Roles extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
