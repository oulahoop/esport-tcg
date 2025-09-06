<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['code', 'name'];

    public function playerCards()
    {
        return $this->hasMany(PlayerCard::class);
    }
}
