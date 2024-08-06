<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $countryId = Country::inRandomOrder()->first()->id;
        $name = $this->faker->name();
        $splitName = explode(' ', $name, 2);
        $nickName = $last_name = !empty($splitName[1]) ? $splitName[1] : '';
        $wallet = mt_rand(10000, 100000);
        $point = mt_rand(10000, 100000);
        return [
            'Nickname' => $nickName,
            'RealName' => $name,
            'ProfilePictureURL' => 'assets/default_profile_image.png',
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt($this->faker->word()),
            'Bio' => $this->faker->text(),
            'UniqueCode' => Str::random(10),
            'CountryID' => $countryId,
            'Wallet' => $wallet,
            'Point' => $point,
            'BackgroundURL' => 'assets/default_background_image.png',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    // public function unverified()
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
