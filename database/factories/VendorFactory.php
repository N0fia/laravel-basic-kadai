<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'id' => "8",
            'vendor_code' => fake()->randomNumber(5, true),
            'vendor_name' => fake()->company(),
            'updated_at'=> now(),
            'created_at' => now()
        ];
    }
}
