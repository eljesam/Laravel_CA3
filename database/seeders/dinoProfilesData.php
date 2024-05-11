<?php

namespace Database\Seeders;

use App\Models\DinoProfile;
use Illuminate\Database\Seeder;

class dinoProfilesData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DinoProfile::truncate();
       $csvFile=fopen(base_path("database/data/dino_profiles.csv"),"r");
       $firstline=true;
       while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
        if(!$firstline){
            DinoProfile::create([
                'id' => $data[0],
                'slug' => $data[1],
                'name' => $data[2],
                'species' => $data[3],
                'era' => $data[4],
                'diet' => $data[5],
                'habitat'=>$data[6],
                'size'=>$data[7],
                'description'=>$data[8],
                'created_at'=>$data[9],
                'updated_at'=>$data[10]
            ]);
        }
        $firstline=false;
    }
    fclose($csvFile);
    }
}
