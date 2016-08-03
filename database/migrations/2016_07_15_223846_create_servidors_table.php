<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servidors', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->string('sobrenome');
			$table->decimal('siape');
			$table->string('cargo');
			$table->timestamps('datanascimento');
			$table->timestamps('entrada');
			$table->timestamps('saida');
			$table->string('observacoes');
			$table->integer('chave');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('servidors');
    }
}
