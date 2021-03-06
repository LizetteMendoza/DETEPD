<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('user_id')->constrained()->onDelete('cascade'); //nombre de la tabla en singular _id
            $table->string('nombre');
            $table->string('curp',18);
            $table->string('direccion');
            $table->integer('imf');
            $table->smallInteger('edad');
            $table->string('telefono',10);
            $table->string('sexo');
            $table->string('limitacion');
            $table->string('escolaridad');
            $table->string('plantel');
            $table->string('etnia');
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
        Schema::dropIfExists('applications');
    }
};
