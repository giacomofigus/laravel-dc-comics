<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $comics = config('comics');

        foreach($comics as $element){
            $newComic = new Comic();

            $newComic->id = $element['id'];
            $newComic->titolo = $element['title'];
            $newComic->descrizione = $element['description'];
            $newComic->thumb = $element['thumb'];
            $newComic->prezzo = $element['price'];
            $newComic->series = $element['series'];
            $newComic->sale_date = $element['sale_date'];
            $newComic->tipo = $element['type'];
             

            $newComic->save();
        }
    }
}
