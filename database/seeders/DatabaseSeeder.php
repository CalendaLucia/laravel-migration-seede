<?php

namespace Database\Seeders;
use App\Models\Train;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->dateTimeBetween('now', '+7 days'),
                'arrival_time' => $faker->dateTimeBetween('now', '+7 days'),
                'train_code' => $faker->regexify('[A-Z]{3}[0-9]{4}'),
                'coach_number' => $faker->numberBetween(1, 20),
                'on_time' => $faker->boolean,
                'cancelled' => $faker->boolean(10)
            ]);
        }
        
    }
}
