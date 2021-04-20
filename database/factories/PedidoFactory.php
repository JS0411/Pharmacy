<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'forma_pago' => $this->faker->randomElement(['Contado', '5d', '15d','30d']),
            'costo_inicial' => $this->faker->randomNumber(),
            'farmacia_id' => 0,            
        ];
    }
}
