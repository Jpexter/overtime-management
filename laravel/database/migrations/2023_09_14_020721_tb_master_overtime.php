<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbMasterOvertime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_master_overtime', function (Blueprint $table){
            $table->increments('id_record_overtime');
            $table->foreignId('id_users')->constrained('tb_users', 'id_users')->cascadeOnDelete();
            $table->integer('weekday');
            $table->integer('weekend');
            $table->integer('on_duty');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_master_basic_salary');
    }
}
