<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazaTemperamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razas_temperamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('razas_id')->unsigned();
            $table->integer('temperamento_id')->unsigned();
            $table->timestamps();
            $table->foreign('razas_id')->
            references('id')->
            on('razas')->onDelete('cascade');
            $table->foreign('temperamento_id')->
            references('id')->
            on('temperamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('videojuego_plataforma', function (Blueprint $table) {
          $table->dropForeign('raza_temperament_razaPerro_id_foreign');
          $table->dropColumn('razaPerro_id');
          $table->dropForeign('raza_temperament_temperamento_id_foreign');
          $table->dropColumn('temperamento_id');

      });
        Schema::dropIfExists('raza_temperamento');
    }
}
