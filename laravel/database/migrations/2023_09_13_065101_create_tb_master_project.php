<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMasterProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_master_project', function (Blueprint $table) {
            $table->bigIncrements('id_project');
            $table->string('project_name');
            $table->enum('status', ['normal', 'holiday']);
            $table->enum('is_on_duty', ['Y', 'N']);
            $table->softDeletes();
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
        Schema::dropIfExists('tb_master_project');
    }
}
