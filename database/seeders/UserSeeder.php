<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'Nickname' => 'admin',
            'RealName' => 'admin',
            'email' => 'admin@mail.com',
            'Role' => 'admin',
            'password' => bcrypt('admin123'),
            'UniqueCode' => '1111111111',
            'CountryID' => 1,
        ]);
        User::factory(100)->create();
    }
}
