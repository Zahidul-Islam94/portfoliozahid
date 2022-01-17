<?php

namespace Database\Seeders;

use App\Models\Skill;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country=["Bangladesh","India","Pakistan","America","China"];
        $faker=Factory::create();
        foreach(range(0,99) as $index){
            Skill::create([
                "language"   =>$faker->randomElement(["Programming","Writing","Pakistan","America","China"]),
                "percentage" => $faker->randomElement([100,200,300]) 
            ]);
        }
    }
}
