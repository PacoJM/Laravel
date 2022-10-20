<?php

namespace Database\Seeders;

use App\Models\Photo;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder{
    public function run(Faker $faker){
        for ($i = 0; $i < 10; $i++) {
            $photo = new Photo();
            $photo->path = $faker->imageUrl();
            $photo->description = $faker->paragraphs(2, true);
            $photo->save();
        }
    }
}