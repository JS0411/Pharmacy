<?php

namespace Database\Factories;

use App\Models\Medicamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medicamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'monodroga' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'presentacion' => $this->faker->randomElement(['Ampolla 5unid.', 'Jarabe 100ml.', 'Comprimido 1gr.','Comprimido 500gr.', 'Pomada 60gr.', 'Aerosol 100ml.']),
            'precio' => $this->faker->randomNumber(),
            'accion_t' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'stock' => $this->faker->randomNumber(),
            'nombre_lab' => '',
        ];
    }
}
