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
        $name = $this->faker->name();
        $splitName = explode(' ', $name, 2);
        $nickName = $last_name = !empty($splitName[1]) ? $splitName[1] : '';
        return [
            'Nickname' => $nickName,
            'RealName' => $name,
            'ProfilePictureURL' => $this->faker->image(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Password' => bcrypt($this->faker->word()),
            'Role' => $this->faker->randomElement(['admin','user']),
            'Bio' => $this->faker->text(),
            'UniqueCode' => Str::random(10),
            'CountryID' => Country::inRandomOrder()->first()->id,
            'Wallet' => $this->faker->numberBetween(100, 100000),
            'Point' => $this->faker->numberBetween(100, 10000),
            'BackgroundURL' => $this->faker->image(),
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
