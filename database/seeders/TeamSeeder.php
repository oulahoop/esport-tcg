<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            ['code' => 'KC', 'name' => 'Karmine Corp'],
            ['code' => 'G2', 'name' => 'G2 Esports'],
            ['code' => 'FNC', 'name' => 'Fnatic'],
            ['code' => 'MKOI', 'name' => 'Movistar KOI'],
            ['code' => 'NAVI', 'name' => 'Navi'],
            ['code' => 'SK', 'name' => 'SK Gaming'],
            ['code' => 'VIT', 'name' => 'Team Vitality'],
            ['code' => 'GX', 'name' => 'GIANTX'],
            ['code' => 'BDS', 'name' => 'Team BDS'],
            ['code' => 'TH', 'name' => 'Team Heretics'],
        ];

        foreach ($teams as $team) {
            Team::updateOrCreate(
                ['code' => $team['code']],
                ['name' => $team['name']]
            );
        }
    }
}
