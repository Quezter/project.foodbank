<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitiativeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiative_details', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('lang');
            $table->integer('initiative_id')->unsigned();
            $table->foreign('initiative_id')->references('id')
                ->on('initiatives')->onUpdate('restrict')->onDelete('cascade');
            
            $table->string('title');
            $table->string('body');
            
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
        Schema::dropIfExists('initiative_details');
    }
}
