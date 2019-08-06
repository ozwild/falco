<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Repertoire
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $account_id
 * @property int $type_id
 * @property string $uri
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PerformanceSample whereUri($value)
 */
class PerformanceSample extends Model
{
    protected $fillable = [
        'uri'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function account()
    {
        return $this->belongsTo('App\Account');
    }

}
