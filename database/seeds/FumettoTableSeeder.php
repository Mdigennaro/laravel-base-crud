<?php

use App\Fumetto;
use Illuminate\Database\Seeder;

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

            
        }
    }
}
