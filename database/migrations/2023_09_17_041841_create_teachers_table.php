<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('teachers')){
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('department_id')->constrained('departments')->cascadeOnDelete();;
            $table->string('designation');
            $table->string('join_date');
            $table->string('phone');
            $table->string('email');
            $table->tinyInteger('gender')->nullable();
            $table->unsignedTinyInteger('status')->default(1)->comment('1=> Active, 0=>Inactive');
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
