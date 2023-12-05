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
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id'); //Es un id autoincementable
            $table->String('nombre');
            $table->String('app');
            $table->String('apm')->nullable();
            $table->String('telefono');
            $table->String('email');
            $table->String('pass');
            $table->unsignedBigInteger('fk_id_estado');
            $table->unsignedBigInteger('fk_id_tipousu');
            $table->timestamps();

            $table->foreign('fk_id_estado')->references('id')->on('tb_estados');
            $table->foreign('fk_id_tipousu')->references('id')->on('tb_tipousus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_usuarios');
    }
};
