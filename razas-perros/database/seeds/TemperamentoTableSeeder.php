<?php

use Illuminate\Database\Seeder;

class TemperamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $temp = new \App\Temperamento([
              'nombre'=>'Inteligente'
          ]);
          $temp->save();
          $temp = new \App\Temperamento([
              'nombre'=>'Entrenable'
          ]);
          $temp->save();
          $temp = new \App\Temperamento([
              'nombre'=>'Energético'
          ]);
          $temp->save();
          $temp = new \App\Temperamento([
              'nombre'=>'Amigable'
          ]);
          $temp->save();

          $temp = new \App\Temperamento([
              'nombre'=>'Cariñoso'
          ]);
          $temp->save();
          $temp = new \App\Temperamento([
              'nombre'=>'Jugueton'
          ]);
          $temp->save();
          $temp = new \App\Temperamento([
              'nombre'=>'Alerta'
          ]);
          $temp->save();
          $temp = new \App\Temperamento([
              'nombre'=>'Alegre'
          ]);
          $temp->save();
    }
}
