<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_municipios', function (Blueprint $table) {
            $table->bigIncrements('id'); //Es un id autoincementable
            $table->unsignedBigInteger('fk_id_estado');
            $table->integer('clave');
            $table->String('municipio');
            $table->boolean('activo');
            $table->timestamps();

            $table->foreign('fk_id_estado')->references('id')->on('tb_estados');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_municipios');
    }
};
