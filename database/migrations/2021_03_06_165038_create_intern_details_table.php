<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intern_details', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('full_name');
            $table->string('gender');
            $table->integer('age');
            $table->date('dob');
            $table->integer('contact');
            $table->string('email');
            $table->string('type');
            $table->string('resume');
            $table->tinyInteger('status')->default(0);
            $table->string('a_date');
            $table->string('a_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intern_details');
    }
}
