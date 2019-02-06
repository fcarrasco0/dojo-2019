<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamuraisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samurais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('idade')->unsigned()->default(17);
            $table->string('nome_dojo')->nullable();
            $table->string('posto')->mullable();
            $table->string('arma')->nullable();
            $table->integer('missoes')->unsigned()->default(0);
            $table->softDeletes();

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
        Schema::dropIfExists('samurais');
    }
}
