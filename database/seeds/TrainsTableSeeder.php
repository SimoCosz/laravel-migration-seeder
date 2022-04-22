<?php

use App\models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
        $train = new Train();

        $train->azienda = $faker->word();
        $train->stazione_di_partenza = $faker->city();
        $train->stazione_di_arrivo = $faker->city();
        $train->orario_di_partenza = $faker->time();
        $train->orario_di_arrivo = $faker->time();
        $train->codice_treno = $faker->bothify('??#?###?');
        $train->numero_carrozze = $faker->randomNumber(1, 30);
        $train->in_orario = $faker->boolean();
        $train->cancellato = $faker->boolean();

        $train->save();
    }
}
