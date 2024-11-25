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
        
        Schema::table('books', function (Blueprint $table) {
            //! aggiungiamo la colonna user_id
            //unsignedBigInteger - numero molto grande senza segno  = numeri positivi (maggiori di 0), senza virgola, possono arrivare a cifre molto elevate e auto incrementali
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
            // CHIAVE ESTERNA -> E' UN DATO PREESISTENTE PRESO DA UN'ALTRA TABELLA
            //! foreign('user_id') -> la colonna user id ospita una chiave esterna (fk)
            //! references('id') -> la fk fa riferimento alla colonna id
            //! on('users') -> nella tabella users
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            //! droppa il collegamento con l'altra tabella , droppando la FK
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
