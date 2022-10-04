<?php

use App\Comic;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic){
            $newComic = new Comic();
            $newComic->fill($comic);
            $newComic->save();
        }
    }
}
