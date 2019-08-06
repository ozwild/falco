<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\AccountListing
 *
 * @property int $user_id
 * @property int $account_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountListing whereUserId($value)
 * @mixin \Eloquent
 */
class AccountListing extends Pivot
{

    protected $table = 'account_listings';

    protected $fillable = [

    ];

}
