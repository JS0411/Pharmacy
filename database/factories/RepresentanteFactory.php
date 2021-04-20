<?php

namespace Database\Factories;

use App\Models\Representante;
use Illuminate\Database\Eloquent\Factories\Factory;

class RepresentanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Representante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_representante' => $this->faker->name(),
            'cod_representante' => $this->faker->randomNumber()
        ];
    }
}
