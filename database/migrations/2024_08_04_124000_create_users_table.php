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
            $table->string('Nickname', 64)->default('');
            $table->string('RealName', 64)->default('');
            $table->text('ProfilePictureURL')->default('assets/default_profile_image.png');
            $table->string('Email', 64);
            $table->string('Password', 64);
            $table->string('Role', 64)->default('guest');
            $table->text('Bio')->default("");
            $table->string('UniqueCode', 64);
            $table->foreignId('CountryID')->constrained('countries');
            $table->integer('Wallet')->default(0);
            $table->integer('Point')->default(0);
            $table->text('BackgroundURL')->default('assets/default_background_image.png');
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
