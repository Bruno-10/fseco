<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
/*     public function up()
    {
        Schema::create('caja', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_cabecera');
            $table->string('idProductos');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }
 */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
/*     public function down()
    {
        Schema::dropIfExists('caja');
    } */
}
