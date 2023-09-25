<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMasterBasicSalary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_master_basic_salary', function (Blueprint $table) {
            $table->increments('id_basic_salary');
            $table->foreignId('id_users')->constrained('tb_users','id_users')->cascadeOnDelete();
            $table->string('total_basic_salary', 15);
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
        Schema::dropIfExists('tb_master_basic_salary');
    }
}
