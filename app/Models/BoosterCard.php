<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoosterCard extends Model
{
    protected $fillable = [
        'booster_id',
        'player_card_id',
    ];

    public function booster()
    {
        return $this->belongsTo(Booster::class);
    }

    public function playerCard()
    {
        return $this->belongsTo(PlayerCard::class);
    }
}
