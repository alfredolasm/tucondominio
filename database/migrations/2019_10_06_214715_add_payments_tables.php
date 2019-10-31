<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference',20);
            $table->string('bank',60);
            $table->double('amount', 10, 2);
            $table->date('date_at');
            $table->boolean('confirmed');
            $table->bigInteger('beneficiary_id')->unsigned();
            $table->bigInteger('concept_id')->unsigned();

            $table->foreign('concept_id')->references('id')->on('concepts')->onDelete('cascade');
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}
