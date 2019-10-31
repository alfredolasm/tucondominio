<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concepts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->date('period');
            $table->date('expiration');
            $table->double('amount',10,2);
            $table->double('surcharge');
            $table->enum('type',['Regular','Eventual','Extraordinario','Urgente']);
            $table->bigInteger('rule_id')->unsigned();

            $table->foreign('rule_id')->references('id')->on('rules')->onDelete('cascade');

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
        Schema::dropIfExists('concepts');
    }
}
