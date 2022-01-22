<?php

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_game = new Game();
        $_game->title = 'TEMPLATE';
        $_game->thumb = 'https://picsum.photos/300/200';
        $_game->description = 'Lorem Ipsum Times Twenty';
        $_game->save();
    }
}