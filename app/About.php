<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\About
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $about
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereUpdatedAt($value)
 */
class About extends Model
{
    protected $fillable = [
        'about'
    ];

    //@todo resolve polymorphic ownership

}
