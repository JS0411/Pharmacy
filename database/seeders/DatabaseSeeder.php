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
      An employee will be underage, one of age, a pharmaceutical and a basic employee*/
  
      // Underage Intern

          $menor = \App\Models\Empleado::factory()->create([
            'empleable_id' => \App\Models\Pasante::factory()->create([
              'menor_de_edad' => 1,
            ]),
            'empleable_type' => '\App\Models\Pasante',
          ]);
          /*Minors will need to get a representative created*/
          $representante = (\App\Models\Representante::factory()->create([
            'pasante_id' =>  \App\Models\Pasante::find($menor->empleable_id),
          ]));
          
      // Intern of Age

      $mayor = \App\Models\Empleado::factory()->create([
        'empleable_id' => \App\Models\Pasante::factory()->create([
          'menor_de_edad' => 0,
        ]),
        'empleable_type' => '\App\Models\Pasante',
      ]);

      // Pharmaceutical

      $farmaceutico = \App\Models\Empleado::factory()->create([
        'empleable_id' => \App\Models\Farmaceutico::factory()->create(),
        'empleable_type' => '\App\Models\Farmaceutico',
      ]);


      // Basic Employee

      $empleadobasico = \App\Models\Empleado::factory()->create([
        'empleable_id' => \App\Models\EmpleadoBasico::factory()->create(),
        'empleable_type' => '\App\Models\EmpleadoBasico',
      ]);


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

