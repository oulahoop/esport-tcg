<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Booster extends Model
{
    protected $fillable = [
        'name',
        'image',
        'cards_count',
        'price',
        'luck',
    ];

    public function cards(): HasManyThrough
    {
        return $this->hasManyThrough(PlayerCard::class, BoosterCard::class, 'booster_id', 'id', 'id', 'player_card_id');
    }
}
