<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Score
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $reviewer_id
 * @property int $account_id
 * @property int $score
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @property-read \App\User $reviewer
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereReviewerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereUpdatedAt($value)
 */
class Score extends Pivot
{

    protected $table = 'scores';

    protected $fillable = [
        'score'
    ];

    protected static function boot()
    {
        Score::updated(function(Score $score){
            $score->account->updateRating();
        });

        Score::created(function(Score $score){
            $score->account->updateRating();
        });

        parent::boot();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

}
