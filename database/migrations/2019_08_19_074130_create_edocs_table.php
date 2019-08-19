<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objective', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->timestamps();
        });

        Schema::create('edocs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->dateTime('date');
            $table->text('topic');

            // $table->string('part_id'); //เลขที่รับส่วนงาน
            $table->string('booknum');
            $table->string('edoc_type');
            $table->dateTime('start'); //วันทีเริ่ม
            $table->dateTime('end'); //วันที่สิ้นสุด
            $table->text('detail');
            $table->string('file');
            $table->string('retirement');
            $table->string('position');
            $table->string('important');
            $table->string('status');
            $table->integer('objective_id')->unsigned();
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
        Schema::dropIfExists('objective');
        Schema::dropIfExists('edocs');
    }
}
