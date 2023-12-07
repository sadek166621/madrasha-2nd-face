<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusfemalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campusfemales', function (Blueprint $table) {
            $table->id();
            $table->text('Quran_Reading_Course')->nullable();
            $table->text('Quranic_Arabic_Course')->nullable();
            $table->text('Quran_Memorization_Course')->nullable();
            $table->text('Quran_Reading_Course_a')->nullable();
            $table->text('Quranic_Arabic_Course_a')->nullable();
            $table->text('Quran_Memorization_Course_a')->nullable();
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
        Schema::dropIfExists('campusfemales');
    }
}
