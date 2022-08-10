<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'info' => $this->faker->paragraph,
        ];
    }
}