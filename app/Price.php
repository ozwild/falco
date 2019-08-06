<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Price
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $account_id
 * @property string $description
 * @property float $price
 * @property int $currency_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereUpdatedAt($value)
 */
class Price extends Model
{
    protected $fillable = [
        'description', 'price','currency_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function account()
    {
        return $this->belongsTo('App\Account');
    }

}
