<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crew_id')->unsigned();
            $table->foreign('crew_id')->references('id')->on('crews');
            $table->string('type');
            $table->string('path');
            $table->string('no');
            $table->string('place');
            $table->date('issued');
            $table->date('valid');
            $table->string('country')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
