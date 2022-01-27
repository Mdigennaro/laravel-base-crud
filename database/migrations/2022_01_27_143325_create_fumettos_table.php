<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFumettosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fumettos', function (Blueprint $table) {
            $table->id();

            $table->string('titolo',50);
            $table->string('cover');
            $table->decimal('prezzo', 4, 2);
            $table->string('serie', 50);
            $table->date('data_di_vendita')->format('d.m.Y');
            $table->string('tipologia',50);
            $table->string('slug',50);

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
        Schema::dropIfExists('fumettos');
    }
}
