<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazasperrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->integer('alturaInicial');
            $table->integer('alturaFinal');
            $table->integer('tamano_id')->unsigned();
            $table->foreign('tamano_id')
            ->references('id')->on('tamanos')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('razasperros', function (Blueprint $table) {
        $table->dropForeign('razasperros_tamano_id_foreign');
        $table->dropColum('tamano_id');
    });
        Schema::dropIfExists('razasperros');
    }
}
