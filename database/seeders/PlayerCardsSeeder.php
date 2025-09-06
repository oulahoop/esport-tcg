<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\PlayerCard;
use App\Models\Team;
use Illuminate\Database\Seeder;

class PlayerCardsSeeder extends Seeder
{

    public function run(): void
    {
        $canna = Player::where('name', 'Canna')->first();
        $caliste = Player::where('name', 'Caliste')->first();
        $team = Team::where('code', 'KC')->first();

        PlayerCard::create(
            [
                'player_id' => $canna->getKey(),
                'team_id' => $team->getKey(),
                'overall_rating' => 99,
                'micro_rating' => 99,
                'macro_rating' => 99,
                'teamplay_rating' => 95,
                'leadership_rating' => 90,
                'creativity_rating' => 98,
                'adaptability_rating' => 98,
                'consistency_rating' => 99,
                'rarity' => 'LR',
                'card_type' => 'Legendary',
                'release_date' => now(),
                'season' => '2025',
                'tournament' => 'LEC 2025 Summer Playoffs',
                'player_card_image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/2b/KC_Canna_2025_Split_3.png',
            ]
        );

        PlayerCard::create([
            'player_id' => $caliste->getKey(),
            'team_id' => $team->getKey(),
            'overall_rating' => 98,
            'micro_rating' => 97,
            'macro_rating' => 99,
            'teamplay_rating' => 97,
            'leadership_rating' => 98,
            'creativity_rating' => 93,
            'adaptability_rating' => 98,
            'consistency_rating' => 98,
            'rarity' => 'LR',
            'card_type' => 'Legendary',
            'release_date' => now(),
            'season' => '2025',
            'tournament' => 'LEC 2025 Summer Playoffs',
            'player_card_image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/8/86/KC_Caliste_2025_Split_3.png',
        ]);
    }

}
