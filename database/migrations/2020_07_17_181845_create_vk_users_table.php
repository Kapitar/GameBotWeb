<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVkUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vk_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->integer('balance')->nullable();
            $table->integer('subscribed')->nullable();
            $table->integer('status')->nullable();
            $table->integer('palki_balance')->nullable();
            $table->integer('game_number')->nullable();
            $table->integer('number_of_wins')->nullable();
            $table->integer('stavka')->nullable();
            $table->integer('palki_kf')->nullable();
            $table->integer('reg_19c')->nullable();
            $table->integer('prey_id')->nullable();
            $table->text('protection')->nullable();
            $table->integer('last_day_of_robbery')->nullable();
            $table->integer('balance_barrier')->nullable();
            $table->integer('vip')->nullable();
            $table->integer('conect_id')->nullable();
            $table->integer('ksi_matrica')->nullable();
            $table->integer('g_number_matrica')->nullable();
            $table->integer('w_number_matrica')->nullable();
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
        Schema::dropIfExists('vk_users');
    }
}
