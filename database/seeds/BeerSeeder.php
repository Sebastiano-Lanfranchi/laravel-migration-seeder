<?php

use Illuminate\Database\Seeder;
use App\beer;
use Faker\Generator as Faker;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $beer = new Beer();
            $beer->brand = $faker->name();
            $beer->beerImg = 'https://www.allaguida.it/wp-content/uploads/xFord-Focus-ST-Blood-Type-Racing.jpg.pagespeed.ic.kPi3Ce7gMn.webp';
            $beer->type = $faker->name();
            $beer->alcoholLevel = rand(5, 20);
            $beer->ibu = rand(5, 40)+'IBU';
            $beer->color = '#hhhhhh';
            $beer->description = $faker->text(150);
            $beer->save();
        }
    }
}
