<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\AccountManager
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager query()
 * @mixin \Eloquent
 * @property int $user_id
 * @property int $account_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountManager whereUserId($value)
 */
class AccountManager extends Pivot
{

    protected $table = 'account_managers';

    protected $fillable = [

    ];

}
