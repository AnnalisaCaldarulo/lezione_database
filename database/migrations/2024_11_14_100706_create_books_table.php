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
        Schema::create('books', function (Blueprint $table) {
            //! $table = colonna
            $table->id(); // un numero molto grande senza virgola, positivo auto incrementale
            $table->string('title'); //255 char
            $table->text('plot');
            $table->integer('price');
            $table->integer('pages');
            $table->timestamps(); // creato e modificato 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
