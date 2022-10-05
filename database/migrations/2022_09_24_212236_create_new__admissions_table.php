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
        Schema::create('new__admissions', function (Blueprint $table) {
            $table->id('new_admission_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->integer('mobile_no');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('class_id')->on('classes');
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')->references('section_id')->on('sections');
            $table->string('gurdain_name');
            $table->integer('roll_no');
            $table->enum('category',["genral","OBC","SC","ST","Other"]);
            $table->string('address');
            $table->string('city');
            $table->date('admission_date');
            $table->string('subling');
            $table->enum('admission_type',["For Promotes new admission","For only new admission","For only Promoted"]);
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
        Schema::dropIfExists('new__admissions');
    }
};
