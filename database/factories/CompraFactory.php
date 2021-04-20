<?php

namespace Database\Factories;

use App\Models\Compra;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'insumos_recibidos' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'costo_final' => $this->faker->randomNumber(),
            'pagado' => $this->faker->boolean(),
            'fecha_vencimiento' => $this->faker->dateTimeBetween($startDate= 'now', $endDate = '+1 years')
        ];
    }
}
