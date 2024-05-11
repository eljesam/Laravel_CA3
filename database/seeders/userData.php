<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class userData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $csvFile = fopen(base_path("database/data/users.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                User::create([
                    'id' => $data[0],
                    'name' => $data[1],
                    'email' => $data[2],
                    'email_verified_at' => $data[3],
                    'password' => $data[3],
                    'icon' => $data[4],
                    'remember_token' => $data[5],
                    'created_at' => $data[6],
                    'updated_at' => $data[7]
                ]);
            }
            $firstline = false;
        }
    }
}
