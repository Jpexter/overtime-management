<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->bigIncrements('id_users'); // Menggunakan bigIncrements sebagai primary key
            $table->string('name', 90);
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->integer('phone_number');
            $table->rememberToken();
            $table->foreignId('id_role')->constrained('tb_role', 'id_role')->cascadeOnDelete();
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
        Schema::dropIfExists('tb_users');
    }
}
