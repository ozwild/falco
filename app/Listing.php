<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Listing
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $listing
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Account[] $accounts
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereListing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereUpdatedAt($value)
 */
class Listing extends Model
{
    protected $fillable = [
        'name', 'description', 'active'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    function accounts(){
        return $this->belongsToMany('App\Account', 'account_listings')
            ->using('App\AccountListing')
            ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function about()
    {
        return $this->morphOne('App\About', 'aboutable');
    }

}
