<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      /*First you create 4 employees, as well as 4 pharmacies, 
      two employees will be minors and they'll get a representative object added*/
  
      for ($i = 0; $i < 2; $i++){
        for ($j = 0; $j<2; $j++){
          $empleado = \App\Models\Empleado::factory()->create([
            'farmacia_id' => \App\Models\Farmacia::factory()->create(),
          ]);
          $empleado->empleable->menor_de_edad = $j;
          /*Minors will need to get a representative created*/
          if ($empleado->empleable->menor_de_edad == true) {
              \App\Models\Representante::factory()->create([
                'pasantes_id' => $empleado->empleable_id,
              ]);
          }
        }
      }

      /*Now we create 12 medicines, purchases and purchase_orders adding a 
      laboratory/pharmacy for each group of 3 items*/

      for ($i = 1 ; $i <= 4; $i++){
        $medicamento = \App\Models\Medicamento::factory()
          ->count(3)
          ->for(\App\Models\Farmacia::find($i))
          ->for($lab = \App\Models\Laboratorio::factory()->create())
          -> create([
            'nombre_lab' => $lab->nombre,
          ]);

        $pedido = \App\Models\Pedido::Factory()
          ->count(3)
          ->for(\App\Models\Farmacia::find($i))
          ->has(\App\Models\Compra::Factory())
          ->create();
      }


        // \App\Models\User::factory(10)->create();
    }
}
