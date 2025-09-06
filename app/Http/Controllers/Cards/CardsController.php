<?php

namespace App\Http\Controllers\Cards;

use App\Http\Controllers\Controller;
use App\Models\PlayerCard;
use Inertia\Inertia;

class CardsController extends Controller
{
    public function index()
    {
        return Inertia::render('cards/Index', [
            'cards' => PlayerCard::with('player', 'booster')->paginate(10)
        ]);
    }
}
