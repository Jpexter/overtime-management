<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAttendance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_attendance', function (Blueprint $table) {
            $table->bigIncrements('id_attendance');
            $table->foreignId('id_users')->constrained('tb_users', 'id_users')->cascadeOnDelete();
            $table->foreignId('id_division')->constrained('tb_master_division', 'id_division')->cascadeOnDelete();
            $table->text('reason');
            $table->date('submission_date');
            $table->date('finish_date');
            $table->enum('type', ['cuti bersama', 'sakit']); 
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
        Schema::dropIfExists('tb_attendance');
    }
}
