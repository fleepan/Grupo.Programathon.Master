<?php

use Illuminate\Database\Seeder;

class TamanosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tamano= new \App\Tamano();
      $tamano->descripcion = 'Toy';
      $tamano->save();
      $tamano= new \App\Tamano();
      $tamano->descripcion = 'Pequeño';
      $tamano->save();
      $tamano= new \App\Tamano();
      $tamano->descripcion = 'Mediano';
      $tamano->save();
      $tamano= new \App\Tamano();
      $tamano->descripcion = 'Grande';
      $tamano->save();
      $tamano= new \App\Tamano();
      $tamano->descripcion = 'Gigante';
      $tamano->save();
    }
}
