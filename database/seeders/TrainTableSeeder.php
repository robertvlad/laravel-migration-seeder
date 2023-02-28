<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->bothify('????-#####');
            $newTrain->numero_carroze = $faker->numberBetween(1, 100);
            $newTrain->in_orario = $faker->randomElement([0, 1]);
            $newTrain->cancellato = $faker->randomElement([0, 1]);

            $newTrain->save();
        }
    }
}
