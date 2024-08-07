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
        Schema::create('wallet_codes', function (Blueprint $table) {
            $table->id();
            $table->string('Code', 64);
            $table->integer('Amount');
            $table->integer('IsUsed');
            $table->date('used_at')->nullable();
            $table->foreignId('UserID')->constrained('users');
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
        Schema::dropIfExists('wallet_codes');
    }
};
