<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
use Faker\Generator as Faker;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $song = new Song;
            $song->title = $faker->word();
            $song->album = $faker->word();
            $song->author = $faker->name();
            $song->editor = $faker->company();
            $song->album = $faker->city();
            $song->length = $faker->randomFloat(2, 2, 7);
            $song->poster = "https://picsum.photos/200/300";
            $song->save();
        }
    }
}
