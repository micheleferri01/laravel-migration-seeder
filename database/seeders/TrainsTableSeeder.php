<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {

            $partenza = $faker->dateTimeBetween('today', '+1 day');

            $arrivo = (clone $partenza)->modify(
                '+' . $faker->numberBetween(30, 300) . ' minutes'
            );

            
            $newTrain = new Train();

            $newTrain-> company = $faker->company();

            $newTrain-> departure_station = $faker->city();

            $newTrain-> arrival_station = $faker->city();

            $newTrain-> departure_time = $partenza->format('H:i:s');

            $newTrain-> arrival_time = $arrivo->format('H:i:s');

            $newTrain-> train_code = $faker->numerify('FR####');

            $newTrain-> number_of_wagons = $faker->numberBetween(3, 15);

            $newTrain-> in_time = $faker->boolean(80);

            $newTrain-> cancelled = $faker->boolean(5);

            $newTrain-> created_at = now();

            $newTrain-> updated_at = now();

            $newTrain-> save();
            
        }
    }
}
