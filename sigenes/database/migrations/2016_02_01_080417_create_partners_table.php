<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25);
            $table->string('firstlastname', 25);
            $table->string('secondlastname', 25);
            $table->string('curp', 18);
            $table->timestamp('birthdate');
            $table->enum('sex', ['Maculino', 'Femenino']);
            $table->string('email1', 60);
            $table->string('email2', 45);
            $table->enum('nationality', ['M', 'E']);
            $table->string('telephone', 25);
            $table->string('celphone', 25);
            $table->enum('maritalstatus', ['Casado', 'Soltero', 'Divorciado', 'Viudo']);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('partners');
    }
}
