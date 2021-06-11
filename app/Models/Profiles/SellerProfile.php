<?php

namespace App\Models\Profiles;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SellerProfile extends BaseProfile
{
    use HasFactory;

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'owner_id');
    }

    public function orders() {
        return $this->hasManyThrough(Order::class, Product::class, 'owner_id');
    }
}
