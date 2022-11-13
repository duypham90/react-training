<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ImageSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 10;


        $data = [];
        for ($i = 1; $i <= $limit; $i++) {
            $data[] = [
                'image_title' => $faker->sentence,
                'image_desc' => $faker->slug,
                'post_desc' => $faker->sentence,
                'image_url' => "https://storage.googleapis.com/duypham-vn/uploads/$i.jpg",
                'image_status' => 1,
                'created_by' => 1,
                'created_at' => now(),
            ];
        }

        Image::insert($item);
    }
}
