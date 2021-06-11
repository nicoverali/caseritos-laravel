<?php

namespace App\Models\Profiles;

use App\Models\ModelRolePivot;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ClientProfile extends BaseProfile
{
    use HasFactory;

    protected $fillable = ['phone', 'address'];

    public function orders() : HasMany
    {
        return $this->hasMany(Order::class, 'client_id');
    }
}
