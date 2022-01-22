<?php

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_movie = new Movie();
        $_movie->title = 'TEMPLATE';
        $_movie->thumb = 'https://picsum.photos/300/200';
        $_movie->description = 'Lorem Ipsum Times Twenty';
        $_movie->save();
    }
}