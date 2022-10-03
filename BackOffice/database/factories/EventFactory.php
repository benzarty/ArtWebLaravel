<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'place' =>"Tunis",
            'nameevent' => "Velotino",
            'dateajout' => "03/10/2022",
            'datefin' => "15/10/2022",
            'velo_id' => "1",
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
