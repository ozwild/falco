<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\GalleryItem
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $gallery_id
 * @property int $type_id
 * @property string|null $title
 * @property string|null $description
 * @property string $uri
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Gallery $gallery
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereGalleryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GalleryResource whereUri($value)
 */
class GalleryResource extends Model
{
    protected $fillable = [
        'title', 'description', 'uri'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function gallery(){
        return $this->belongsTo('App\Gallery');
    }

}
