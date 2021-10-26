<?php

namespace Database\Factories;

use App\Models\EmpleadoBasico;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoBasicoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpleadoBasico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cargo' => $this->faker->sentence($nbWords = 1, $variableNbWords = true),
        ];
    }
}
