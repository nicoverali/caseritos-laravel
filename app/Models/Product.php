<?php

namespace App\Models;

use App\Models\Profiles\SellerProfile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id', 'owner_id'];

    // The picture and thumbnail attributes are stored as binary, so whenever we retrieve it we have to convert it
    private $pictureAsString;
    private $thumbnailAsString;

    public function getPictureAttribute($pictureStream){
        if (!$this->pictureAsString){
            $this->pictureAsString =  stream_get_contents($pictureStream);
        }
        return $this->pictureAsString;
    }

    public function getThumbnailAttribute($thumbnailStream){
        if (!$this->thumbnailAsString){
            $this->thumbnailAsString =  stream_get_contents($thumbnailStream);
        }
        return $this->thumbnailAsString;
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(SellerProfile::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
