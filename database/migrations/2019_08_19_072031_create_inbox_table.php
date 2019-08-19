<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInboxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objective', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('desc');
            
            $table->timestamps();
        });

        Schema::create('inbox', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number');
            $table->dateTime('date');
            $table->text('topic');
            $table->string('retirement');

            $table->bigIncrements('objective_id');
            $table->foreign('objective_id')->references('id')->on('objective')->onDelete('cascade');
            
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
        Schema::dropIfExists('inbox');
        Schema::dropIfExists('objective');
    }
}
