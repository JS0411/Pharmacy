<?php

namespace Database\Factories;

use App\Models\Pasante;
use Illuminate\Database\Eloquent\Factories\Factory;

class PasanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pasante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_inicio' => $this->faker->dateTimeBetween($startDate='-1 years', $endDate="now"),
            'fecha_fin' => $this->faker->dateTimeBetween($startDate= 'now', $endDate = '+1 years'),
            'nombre_universidad' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'especialidad' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'menor_de_edad' => $this->faker->boolean(),
            'nro_permiso' => $this->faker->randomNumber(),
            'activo' => 1,
        ];
    }
}
