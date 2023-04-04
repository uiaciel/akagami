<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crew_id')->unsigned();
            $table->foreign('crew_id')->references('id')->on('crews');
            $table->string('category');
            $table->string('type');
            $table->string('path');
            $table->string('no')->nullable();;
            $table->string('place')->nullable();;
            $table->date('issued')->nullable();;
            $table->date('valid')->nullable();;
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
        Schema::dropIfExists('certificates');
    }
}
