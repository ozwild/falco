<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TechnicalData
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData query()
 * @mixin \Eloquent
 * @property int $account_id
 * @property string $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalData whereUpdatedAt($value)
 */
class TechnicalData extends Model
{
    protected $fillable = [
        'data'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function account()
    {
        return $this->belongsTo(Account::class);
    }

}
