<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('user_id') -> unsigned() -> default(0);
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('full_name');
            $table->binary('finger_print2')-> default('');
            $table->binary('finger_print')-> default('');
            $table->tinyInteger('is_admin')-> unsigned() -> default(0);
            $table->tinyInteger('is_active')-> unsigned() -> default(1);
            $table->timestamps();
        });
        Schema::rename('usuarios', 'users_profiles');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users_profiles');
    }
}
