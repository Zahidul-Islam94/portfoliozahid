<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\Skill;
use Faker\Factory;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker=Factory::create();
        foreach(range(0,99) as $index){
            Home::create([
                "title"    =>$faker->sentence,
                "subtitle" => $faker->sentence,
                "image"    =>$faker->imageUrl('https://source.unsplash.com/random')
            ]);
        }
    }
}
