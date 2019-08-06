<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Location
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location query()
 * @mixin \Eloquent
 * @property int $account_id
 * @property string $location Written location reference, address and whatnot
 * @property string $geo_reference Coordinates or geo location reference
 * @property int $work_radius in Kilometers
 * @property int|null $travel_radius in Kilometers
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @property-read bool $will_travel
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereGeoReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereTravelRadius($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereWorkRadius($value)
 */
class Location extends Model
{
    protected $fillable = [
        'location', 'geo_reference', 'work_radius', 'travel_radius'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function account()
    {
        return $this->belongsTo('App\Account');
    }

    protected $appends = [
        "will_travel"
    ];

    /**
     * @return bool
     */
    function getWillTravelAttribute()
    {
        return $this->travel_radius > 0;
    }


}
