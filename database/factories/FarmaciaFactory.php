<?php

namespace Database\Factories;

use App\Models\Farmacia;
use Illuminate\Database\Eloquent\Factories\Factory;

class FarmaciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Farmacia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['Farmatodo', 'Fundafarmacia', 'Locatel','Farmahorro']),
            'ciudad' => $this->faker->randomElement(['Alta Vista', 'Upata', 'San Felix', 'Piar', 'Cd. Bolivar']),
        ];
    }
}
