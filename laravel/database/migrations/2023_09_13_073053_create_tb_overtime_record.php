<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbOvertimeRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_overtime_record', function (Blueprint $table) {
            $table->bigIncrements('id_record');
            $table->foreignId('id_users')->constrained('tb_users', 'id_users')->cascadeOnDelete();
            $table->foreignId('id_project')->constrained('tb_master_project', 'id_project')->cascadeOnDelete();
            $table->foreignId('id_division')->constrained('tb_master_division', 'id_division')->cascadeOnDelete();
            $table->enum('type_overtime', ['normal', 'urgent', 'business trip']);
            $table->dateTime('overtime_date_start');
            $table->dateTime('overtime_date_end');
            $table->enum('overtime_category', ['weekday','weekend','on duty','business trip']);
            $table->time('effective_time');
            $table->string('overtime_reason');
            $table->date('submitted_by_admin');
            $table->enum('send_by_admin', ['Y','N'])->comment('Y: yes, N:');
            $table->text('note_cs');
            $table->enum('checked_by_leader', ['Y','N'])->comment('Y: yes, N:');
            $table->date('checked_by_leader_date');
            $table->integer('cs_normal_count');
            $table->integer('cs_closing_count');
            $table->enum('cs_type', ['normal', 'closing']);
            $table->enum('status', ['approved', 'pending', 'rejected']);
            $table->integer('approved_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_overtime_record');
    }
}
