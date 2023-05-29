<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach($comics as $comic) {
            $eachComic = new Comic();
            $eachComic->title = $comic['title'];
            $eachComic->description = $comic['description'];
            $eachComic->thumb = $comic['thumb'];
            $eachComic->price = $comic['price'];
            $eachComic->series = $comic['series'];
            $eachComic->type = $comic['type'];
            $eachComic->save();
        }
    }
}
