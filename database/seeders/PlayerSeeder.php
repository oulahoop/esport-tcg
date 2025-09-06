<?php

namespace Database\Seeders;

use App\Enums\PlayerPosition;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    public function run() {
        $players = [
            ['name' => 'Canna', 'position' => PlayerPosition::TOP,],
            ['name' => 'Yike', 'position' => PlayerPosition::JUNGLE,],
            ['name' => 'Vladi', 'position' => PlayerPosition::MID,],
            ['name' => 'Nisqy', 'position' => PlayerPosition::MID,],
            ['name' => 'Caliste', 'position' => PlayerPosition::ADC,],
            ['name' => 'Targamas', 'position' => PlayerPosition::SUPPORT,],

            ['name' => 'BrokenBlade', 'position' => PlayerPosition::TOP,],
            ['name' => 'Skewmond', 'position' => PlayerPosition::JUNGLE,],
            ['name' => 'Caps', 'position' => PlayerPosition::MID,],
            ['name' => 'Hans Sama', 'position' => PlayerPosition::ADC,],
            ['name' => 'Labrov', 'position' => PlayerPosition::SUPPORT,],
        ];

        foreach ($players as $player) {
            Player::updateOrCreate(
                ['name' => $player['name']],
                [
                    'position' => $player['position'],
                    'player_default_image' => '',
                ]
            );
        }
    }
}
