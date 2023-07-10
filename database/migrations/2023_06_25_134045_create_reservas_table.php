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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('direccion');
            $table->date('fecha');
            $table->unsignedBigInteger('user_id');  
            $table->unsignedBigInteger('servicio_id'); 
        });
        Schema::table('reservas', function (Blueprint $table) {
            $table->foreign("user_id")->references("id")->on ("users");
        });
        Schema::table('reservas', function (Blueprint $table) {
            $table->foreign("servicio_id")->references("id")->on ("servicios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
