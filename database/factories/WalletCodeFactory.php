<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WalletCode>
 */
class WalletCodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $walletCode = $this->generate_wallet_code();
        $amount = $this->faker->numberBetween(1, 15) * 10000;

        return [
            'Code' => $walletCode,
            'Amount' => $amount,
            'IsUsed' => $this->faker->numberBetween(0, 1),
            'UserID' => User::inRandomOrder()->first()->id,
        ];
    }

    /**
     * Generate a random wallet code.
     *
     * @param int $length
     * @return string
     */
    private function generate_wallet_code($length = 12)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $walletCode = '';
        for ($i = 0; $i < $length; $i++) {
            $walletCode .= $characters[random_int(0, strlen($characters) - 1)];
            if ($i == 3 || $i == 7) {
                $walletCode .= '-'; // Add hyphens for formatting
            }
        }
        return $walletCode;
    }
}
