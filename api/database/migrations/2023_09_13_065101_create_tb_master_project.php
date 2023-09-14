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
            $table->foreignId('id_users')->constrained('tb_users', 'id_users')->cascadeOnDelete();
            $table->string('project_name');
            $table->enum('status', ['normal', 'holiday']);
            $table->string('is_on_duty');
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
