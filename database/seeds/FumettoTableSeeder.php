<?php

use App\Fumetto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FumettoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumettos = config('comics');

        foreach ($fumettos as $fumetto) {
            $new_fumetto = new Fumetto();

            $new_fumetto->titolo = $fumetto['title'];
            $new_fumetto->descrizione = $fumetto['description'];
            $new_fumetto->cover = $fumetto['thumb'];
            $new_fumetto->prezzo = $fumetto['price'];
            $new_fumetto->serie = $fumetto['series'];
            $new_fumetto->data_di_vendita = $fumetto['sale_date'];
            $new_fumetto->tipologia = $fumetto['type'];

            $new_fumetto->slug = Str::slug($new_fumetto->titolo, '-');

            $new_fumetto->save();
        }
    }
}
