<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i <= 20; $i++ ) {
            // istanziare un oggetto del modello
            $new_house = new House();
            $new_house->address = $faker->streetAddress();
            $new_house->postal_code = $faker->postcode();
            $new_house->city = $faker->city();
            $new_house->state = $faker->state();
            $new_house->type = $faker->randomElement(['appartamento', 'villa', 'casa indipendente']);
            $new_house->permises = $faker->numberBetween(1, 5);
            $new_house->rooms = rand(1,4);
            $new_house->bathrooms = rand(1,2);
            $new_house->square_meters = rand(30, 1000);
            $new_house->year_built = $faker->year();
            $new_house->price = $faker->randomFloat(2, 10000, 10000000);
            $new_house->is_available = rand(0,1);
            $new_house->description = $faker->text(rand(200, 500));
            $new_house->energy_rating = $faker->randomElement(['A1', 'A2', 'A3', 'A4', 'B', 'C', 'D', 'E', 'F', 'G']);
            // salva il record nel DB
            $new_house->save();
        }
    }
}
