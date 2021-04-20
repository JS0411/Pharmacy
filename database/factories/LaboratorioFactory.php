<?php

namespace Database\Factories;

use App\Models\Laboratorio;
use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaboratorioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Laboratorio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nro_telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'nombre' => $this->faker->company(),
        ];
    }
}
