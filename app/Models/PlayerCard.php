<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class PlayerCard extends Model
{
    protected $fillable = [
        'player_id',
        'team_id',

        // Ratings
        'overall_rating',
        'micro_rating',
        'macro_rating',
        'teamplay_rating',
        'leadership_rating',
        'creativity_rating',
        'adaptability_rating',
        'consistency_rating',

        // Metadata
        'rarity',
        'card_type',
        'release_date',
        'season',
        'tournament',

        'player_card_image',
    ];

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function booster(): HasOneThrough
    {
        return $this->hasOneThrough(Booster::class, BoosterCard::class, 'player_card_id', 'id', 'id', 'booster_id');
    }
}
