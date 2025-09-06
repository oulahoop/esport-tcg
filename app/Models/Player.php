<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    protected $fillable = [
        'code',
        'name',
        'position',
        'player_default_image',
    ];

    public function playerCards(): HasMany
    {
        return $this->hasMany(PlayerCard::class);
    }
}
