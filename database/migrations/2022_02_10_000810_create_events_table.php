<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id_event'); // ID
            $table->integer('id_institution')->nullable(); // Institución que imparte la actividad
            
            $table->boolean('enable_event'); // Activo / Inactivo
            $table->string('category')->nullable(); // Línea de negocio
            $table->string('type')->nullable(); // Tipo
            $table->string('name', 250)->nullable(); // Tema
            $table->text('description')->nullable(); // Descripción
            $table->string('video')->nullable(); // Link
            // $table->string('image'); // Imagen 
            $table->text('speakers')->nullable(); // Expositor
            $table->text('appointment')->nullable(); // Cargo
            $table->date('date_start')->nullable(); // Fecha de inicio
            $table->date('date_end')->nullable(); // Fecha de termino
            $table->time('schedule_from')->nullable(); // Horario de inicio
            $table->time('schedule_to')->nullable(); // Horario de termino
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
        Schema::dropIfExists('events');
    }
}
