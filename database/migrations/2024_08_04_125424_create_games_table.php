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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('Title', 64);
            $table->string('TrailerURL', 64);
            $table->string('BriefDescription', 64);
            $table->string('FullDescription', 64);
            $table->date('ReleaseDate');
            $table->integer('Price');
            $table->integer('DiscountPercentage');
            $table->foreignId('PublisherID')->constrained('publishers');
            $table->foreignId('AgeRatingID')->constrained('age_ratings');
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
        Schema::dropIfExists('games');
    }
};
