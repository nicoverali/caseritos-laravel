<?php

namespace App\Models;

use App\Models\Profiles\HasBinaryImageAttributes;
use App\Models\Profiles\SellerProfile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes, HasBinaryImageAttributes;

    protected $guarded = ['id', 'owner_id'];

    protected $binaryImageAttributes = ['picture', 'thumbnail'];

    public function scopeSearch(Builder $query, $search){
        $query->when($search, function ($query, $search) {
            $search = strtolower($search);
            $query
                ->whereRaw('LOWER(name) like ?', "%$search%")
                ->orWhereRaw('LOWER(description) like ?', "%$search%");
        });
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(SellerProfile::class)->withTrashed();
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
