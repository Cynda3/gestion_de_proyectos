<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_proyecto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('empleado_id')->nullable();
            $table->integer('proyecto_id')->nullable();
            $table->date('fechainicio');
            $table->date('fechafin');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_proyecto');
    }
}
