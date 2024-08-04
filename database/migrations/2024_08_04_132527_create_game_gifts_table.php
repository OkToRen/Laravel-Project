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
        Schema::create('game_gifts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('SenderID')->constrained('users');
            $table->foreignId('ReceiverID')->constrained('users');
            $table->string('Status', 64);
            $table->string('Message', 64);
            $table->integer('DiscountPercentage');
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
        Schema::dropIfExists('game_gifts');
    }
};
