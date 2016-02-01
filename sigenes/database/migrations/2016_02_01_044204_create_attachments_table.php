<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parner_id')->unsigned();
            $table->integer('attachment_type_id')->unsigned();
            $table->binary('document');
            $table->timestamps()->nullable();
            $table->foreign('attachment_type_id')->references('id')
                ->on('attachment_types')->onDelete('cascade')->onUpdate('cascade');
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
        //
    }
}
