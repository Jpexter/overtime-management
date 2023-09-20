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
            $table->string('username')->unique();
            $table->string('email');
            // $table->timestamp('email_verified_at')->nullable(); 
            $table->string('password');
            $table->string('phone_number');
            $table->foreignId('id_role')->constrained('tb_role', 'id_role')->cascadeOnDelete();
            // $table->rememberToken();
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
