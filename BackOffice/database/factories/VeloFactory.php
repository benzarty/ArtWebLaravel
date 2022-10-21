<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Velo>
 */
class VeloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' =>"velo electrique",
            'marque' => "toyota",
            'description' => "Vélo à assistance électrique Moteur roue avant batterie intégrée ",
            'image' => "rouge",
            'couleur' => "rouge",
            'tarif' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
