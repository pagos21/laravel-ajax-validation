<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizze', function (Blueprint $table) {
            $table->id();
            $table -> string('nome');
            $table -> float('prezzo', 4, 2);
            $table -> boolean('disponibile');
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
        Schema::dropIfExists('pizze');
    }
}
