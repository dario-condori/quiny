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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->comment('Identificador de registro en la tabla');
            $table->string('name', 100)->comment('Nombre de la persona que envia el mensaje');
            $table->string('email')->comment('Correo electrónico proporcionado por el contacto');
            $table->string('subject')->comment('Titulo del mensaje');
            $table->text('message')->comment('Mensaje del contacto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
