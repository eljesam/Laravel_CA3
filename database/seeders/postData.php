<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class postData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $csvFile = fopen(base_path("database/data/posts.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Post::create([
                    'id' => $data[0],
                    'slug' => $data[1],
                    'title' => $data[2],
                    'description' => $data[3],
                    'content' => $data[4],
                    'image_path' => $data[5],
                    'created_at' => $data[6],
                    'updated_at' => $data[7],
                    'user_id' => $data[8]
                ]);
            }
            $firstline = false;
        }
    }
}
