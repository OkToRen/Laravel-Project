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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Nickname', 64);
            $table->string('RealName', 64);
            $table->text('ProfilePictureURL');
            $table->string('Email', 64);
            $table->string('Password', 64);
            $table->string('Role', 64);
            $table->text('Bio');
            $table->string('UniqueCode', 64);
            $table->foreignId('CountryID')->constrained('countries');
            $table->integer('Wallet');
            $table->integer('Point');
            $table->text('BackgroundURL');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
