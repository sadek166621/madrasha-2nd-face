<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentregs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('initial')->nullable();
            $table->string('date')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('countryplacejoining')->nullable();
            $table->string('gender')->nullable();
            $table->string('fathername')->nullable();
            $table->string('mothername')->nullable();
            $table->string('post_code')->nullable();
            $table->string('thana')->nullable();
            $table->string('district')->nullable();
            $table->string('p_postcode')->nullable();
            $table->string('P_thana')->nullable();
            $table->string('p_district')->nullable();
            $table->string('liketostudy')->nullable();
            $table->string('cls_per_wk')->nullable();
            $table->string('weeks')->nullable();
            $table->string('suitable_time')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('income')->nullable();
            $table->string('tuition_fee')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('studentregs');
    }
}
