<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Rating
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating query()
 * @mixin \Eloquent
 * @property int $account_id
 * @property int $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereUpdatedAt($value)
 */
class Rating extends Model
{
    protected $fillable = [
        'rating'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function account()
    {
        return $this->belongsTo('App\Account');
    }

}
