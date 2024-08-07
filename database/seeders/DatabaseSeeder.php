<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CountrySeeder::class);
        $this->call(AgeRatingSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(RatingTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PublisherSeeder::class);
        $this->call(WalletCodeSeeder::class);
    }
}
