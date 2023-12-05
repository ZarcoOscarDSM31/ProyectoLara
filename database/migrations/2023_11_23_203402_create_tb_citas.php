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
        Schema::create('tb_citas', function (Blueprint $table) {
            $table->bigIncrements('id'); //Es un id autoincementable
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->String('descripcion');
            $table->String('lugar');
            $table->unsignedBigInteger('fk_id_usuario');
            $table->timestamps();

            $table->foreign('fk_id_usuario')->references('id')->on('tb_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_citas');
    }
};
