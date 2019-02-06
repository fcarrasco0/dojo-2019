<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDojosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dojos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('sensei_id')->unsigned()->nullable();
            $table->integer('alunos_atuais')->unsigned()->default(0);
            $table->integer('alunos_formados')->unsigned()->default(0);
            $table->integer('alunos_reprovados')->unsigned()->default(0);
            $table->integer('renome')->unsigned()->default(0);
            $table->float('aproveitamento')->default(0.0);
            $table->timestamps();
            
            $table->foreign('sensei_id')
                  ->references('id')
                  ->on('samurais')->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dojos');
    }
}
