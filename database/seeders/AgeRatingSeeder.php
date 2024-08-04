<?php

namespace Database\Seeders;

use App\Models\AgeRating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AgeRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = Storage::get('data/age_ratings_data.json');
        $datas = json_decode($path, true);

        foreach($datas as $data){
            AgeRating::create($data);
        }
    }
}
