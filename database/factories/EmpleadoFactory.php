<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Farmacia;
use App\Models\Pasante;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula' => $this->faker->randomNumber(),
            'nombre' => $this->faker->name(),
            'salario' => $this->faker->randomNumber(),
            'farmacia_id' => Farmacia::factory()->create(),
            'empleable_id' => 0,
            'empleable_type' => ''
        ];
    }
}
