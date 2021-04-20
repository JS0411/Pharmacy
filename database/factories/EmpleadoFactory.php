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
            'cedula' => $this->faker->ssn(),
            'nombre' => $this->faker->name(),
            'farmacia_id' => 0,
            'empleable_id' => Pasante::factory()->create(),
            'empleable_type' => 'App\Models\Pasante'
        ];
    }
}
