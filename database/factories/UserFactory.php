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
        return [
            'Nickname' => $this->faker->word(),
            'RealName' => $this->faker->name(),
            'ProfilePictureURL' => $this->faker->image(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Password' => $this->faker->word(),
            'Role' => $this->faker->randomElement(['admin','user']),
            'Bio' => $this->faker->text(),
            'UniqueCode' => Str::random(10),
            'CountryID' => Country::inRandomOrder()->first()->id,
            'Wallet' => $this->faker->numberBetween(100, 100000),
            'Point' => $this->faker->numberBetween(100, 10000),
            'BackgroundURL' => $this->faker->image(),
            'remember_token' => Str::random(10),
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
