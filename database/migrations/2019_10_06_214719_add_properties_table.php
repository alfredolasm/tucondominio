<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number',8);
            $table->string('street',60);
            $table->bigInteger('beneficiary_id')->unsigned();
            $table->bigInteger('urban_id')->unsigned();
            
            $table->foreign('urban_id')->references('id')->on('urbans')->onDelete('cascade');
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');
            $table->timestamps();
        });

        //Creacion de tabla Pivot para relacion de muchos a muchos
        Schema::create('beneficiary_property', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->bigInteger('beneficiary_id')->unsigned();
            $table->bigInteger('property_id')->unsigned();

            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
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
        schema::dropIfExists('beneficiary_property');
        Schema::dropIfExists('properties');
    }
}
