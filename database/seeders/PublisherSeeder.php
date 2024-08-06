<?php

namespace Database\Seeders;

use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishers = [
            [
                'Name' => 'SLC2',
                'Website' => 'https://narcore.apps.binus.ac.id/',
                'ImageURL' => 'https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1722514953621?alt=media&token=02d4e9cc-235f-4d61-8c9c-1c7744f5d62d',
                'UserID' => $this->getRandomUserId()
            ],
            [
                'Name' => 'SLC',
                'Website' => 'https://nar.binus.ac.id/',
                'ImageURL' => 'https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1722441416392?alt=media&token=090c3fe5-183b-433d-b746-18e353f48e35',
                'UserID' => $this->getRandomUserId()
            ],
            [
                'Name' => 'Electronic Arts',
                'Website' => 'https://www.ea.com/',
                'ImageURL' => 'https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1722157670549?alt=media&token=e4f376e8-82e4-428f-97f9-2df32109330c',
                'UserID' => $this->getRandomUserId()
            ],
            [
                'Name' => 'Hoyoverse',
                'Website' => 'https://account.hoyoverse.com/',
                'ImageURL' => 'https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1722071935934?alt=media&token=aecf60eb-72be-42a2-9aae-36410a3c50fe',
                'UserID' => $this->getRandomUserId()
            ],
            [
                'Name' => 'Playstation Studio',
                'Website' => 'https://www.playstation.com/en-us/corporate/playstation-studios/',
                'ImageURL' => 'https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1722070827576?alt=media&token=79d896a2-2ab4-44d2-8b60-ae8d545a7574',
                'UserID' => $this->getRandomUserId()
            ],
            [
                'Name' => 'Ubisoft',
                'Website' => 'https://www.ubisoft.com/en-us',
                'ImageURL' => 'https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1721990451631?alt=media&token=14b0d69b-0f61-4fcd-94d3-151a466868f6',
                'UserID' => $this->getRandomUserId()
            ],
            [
                'Name' => 'Rockstar',
                'Website' => 'https://www.rockstargames.com/',
                'ImageURL' => 'https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1720501319650?alt=media&token=f19c2e5c-2e7e-4951-8ac1-d8539ca0abe7',
                'UserID' => $this->getRandomUserId()
            ],
        ];

        // Insert data into the 'publishers' table
        foreach($publishers as $publisher){
            Publisher::create($publisher);
        }
    }

    /**
     * Get a random user ID.
     *
     * @return int
     */
    private function getRandomUserId()
    {
        return User::inRandomOrder()->first()->id;
    }
}
