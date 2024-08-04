<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('UserID')->constrained('users');
            $table->foreignId('GameID')->constrained('games');
            $table->integer('IsGift');
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
        Schema::dropIfExists('game_carts');
    }
};
