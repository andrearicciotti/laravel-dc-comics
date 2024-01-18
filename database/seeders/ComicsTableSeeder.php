<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $row) {
            $comic = new Comic();

            $comic->title = $row['title'];
            $comic->description = $row['description'];
            $comic->thumb = $row['thumb'];
            $comic->price = $row['price'];
            $comic->series = $row['series'];
            $comic->sale_date = $row['sale_date'];
            $comic->type = $row['type'];

            $comic->save();

        }
    }
}
