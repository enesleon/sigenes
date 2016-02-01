<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table){
            $table->increments('id');
            $table->integer('no_employee');
            $table->integer('parner_id')->unsigned();
            $table->integer('heigher_education');
            $table->integer('designation');
            $table->integer('certificate_id')->unsigned();
            $table->timestamps();
            $table->foreign('parner_id')->references('id')
                ->on('parners')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
