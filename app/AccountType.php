<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\AccountType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Account[] $accounts
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AccountType extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
