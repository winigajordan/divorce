<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'description' => fake()->paragraph(3),
            'prix' => fake()->randomNumber(3),
            'enfant' =>fake()->boolean(),
            'accord' =>fake()->boolean(),
            'bien' =>fake()->boolean(),
        ];
    }
}
