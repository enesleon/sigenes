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
            $table->integer('partner_id')->unsigned();
            $table->integer('heigher_education');
            $table->integer('designation');
            $table->integer('certificate_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('partner_id')->references('id')
                ->on('partners')->onDelete('cascade')->onUpdate('cascade');
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
