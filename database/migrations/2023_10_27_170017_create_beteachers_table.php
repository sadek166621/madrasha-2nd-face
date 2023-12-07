<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeteachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beteachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('full_address')->nullable();
            $table->string('upazilla')->nullable();
            $table->string('district')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('month')->nullable();
            $table->string('day')->nullable();
            $table->string('year')->nullable();
            $table->string('apply_for_position')->nullable();
            $table->string('desired')->nullable();
            $table->string('training_experience')->nullable();
            $table->string('online_work')->nullable();
            $table->text('cv')->nullable();
            $table->text('document')->nullable();
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
        Schema::dropIfExists('beteachers');
    }
}
