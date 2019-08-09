<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Account
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $administrators
 * @property int $type_id
 * @property int $views
 * @property int $active
 * @property int $published
 * @property-read boolean|null $will_travel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Listing[] $listings
 * @property-read \App\Location $location
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $managers
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Price[] $prices
 * @property-read \App\Rating $rating
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Review[] $reviews
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\PerformanceSample[] $samples
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Score[] $scores
 * @property-read \App\TechnicalData $technicalData
 * @property-read \App\AccountType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account whereViews($value)
 * @property-read double $average_score
 */
class Account extends Model
{
    protected $fillable = [
        'name', 'description', 'email', 'type_id'
    ];

    /**
     * @return float
     */
    public function updateRating()
    {
        $newRating = floor($this->average_score / 2);
        $this->rating()->updateOrCreate(['account_id' => $this->id], ['rating' => $newRating]);
        return $newRating;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    function technicalData()
    {
        return $this->hasOne('App\TechnicalData');
    }

    //@todo resolve polymorphic relations like tag, about, gallery, etc

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    function location()
    {
        return $this->hasOne('App\Location');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    function rating()
    {
        return $this->hasOne('App\Rating');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function scores()
    {
        return $this->hasMany('App\Score');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function reviews()
    {
        return $this->hasMany('App\Review');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function prices()
    {
        return $this->hasMany('App\Price');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function samples()
    {
        return $this->hasMany('App\PerformanceSample');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function type()
    {
        return $this->belongsTo('App\AccountType', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    function managers()
    {
        return $this->belongsToMany('App\User', 'account_managers')
            ->using('App\AccountManager')
            ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    function listings()
    {
        return $this->belongsToMany('App\Listing', 'account_listing')
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

    protected $appends = [
        'will_travel', 'average_score'
    ];

    /**
     * @return boolean|null
     */
    function getWillTravelAttribute()
    {
        if ($this->location) {
            return $this->location->will_travel;
        }
        return null;
    }

    /**
     * @return double
     */
    function getAverageScoreAttribute()
    {
        return number_format($this->scores()->average('score'), 1);
    }

}
