<?php

namespace Database\Seeders;

use App\Models\RatingType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class RatingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = Storage::get('data/rating_types_data.json');
        $datas = json_decode($path, true);

        foreach($datas as $data){
            RatingType::create($data);
        }
    }
}
