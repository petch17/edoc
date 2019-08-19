<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('part_id');
            $table->string('book_id');
            $table->string('edoc_type');
            $table->dateTime('start'); //วันทีเริ่ม
            $table->dateTime('end'); //วันที่สิ้นสุด
            $table->string('detail');
            $table->string('Retirement');
            $table->string('position');
            $table->string('status');

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
        Schema::dropIfExists('form');
    }
}
