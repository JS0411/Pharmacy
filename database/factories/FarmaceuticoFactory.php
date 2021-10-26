<?php

namespace Database\Factories;

use App\Models\Farmaceutico;
use Illuminate\Database\Eloquent\Factories\Factory;

class FarmaceuticoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Farmaceutico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num_colegiatura' => $this->faker->randomNumber(),
            'num_sanitario' => $this->faker->randomNumber(),
            'universidad' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'fecha_graduacion' => $this->faker->dateTimeBetween($startDate='-1 years', $endDate="now"),
            'num_registro' => $this->faker->randomNumber(),
            'id_titulo' => $this->faker->randomNumber(),
        ];
    }
}
