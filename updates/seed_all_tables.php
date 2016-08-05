<?php
namespace Kami\Esport\Updates;

use Kami\Esport\Models\Game;
use Kami\Esport\Models\Squad;
use Kami\Esport\Models\Opponent;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {
        $this->seedGames();
        $this->seedOpponents();
        $this->seedSquads();
    }

    protected function seedGames()
    {
        Game::create([
            'name' => 'DotA 2',
            'slug' => 'dota2'
        ]);

        Game::create([
            'name' => 'Counter Strike: Global Offensive',
            'slug' => 'csgo'
        ]);

        Game::create([
            'name' => 'League of Legends',
            'slug' => 'lol'
        ]);

        Game::create([
            'name' => 'Starcraft 2',
            'slug' => 'sc2'
        ]);
    }

    protected function seedOpponents()
    {
        Opponent::create([
            'name' => 'Team Fnatic',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum purus a nisi pharetra, a scelerisque odio iaculis. Donec commodo euismod ante, vel convallis orci luctus eu. In ac est quis nisl varius vehicula id ut tortor. Pellentesque efficitur viverra magna, eget tempus leo accumsan ac. Ut in interdum dui.'
        ]);

        Opponent::create([
            'name' => 'Na\'vi',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum purus a nisi pharetra, a scelerisque odio iaculis. Donec commodo euismod ante, vel convallis orci luctus eu. In ac est quis nisl varius vehicula id ut tortor. Pellentesque efficitur viverra magna, eget tempus leo accumsan ac. Ut in interdum dui.'
        ]);

        Opponent::create([
            'name' => 'Excretion',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum purus a nisi pharetra, a scelerisque odio iaculis. Donec commodo euismod ante, vel convallis orci luctus eu. In ac est quis nisl varius vehicula id ut tortor. Pellentesque efficitur viverra magna, eget tempus leo accumsan ac. Ut in interdum dui.'
        ]);
    }

    protected function seedSquads()
    {
        Squad::create([
            'name' => 'My Squad',
            'description' => 'My first squad',
            'game_id' => 1
        ]);
    }
}
