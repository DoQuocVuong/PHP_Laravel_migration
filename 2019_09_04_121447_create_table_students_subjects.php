<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudentsSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students_Subjects', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('subject_id');
            $table->string('math_mark');
            $table->string('literature_mark');
            $table->string('English_mark');
            $table->string('Physics_mark');
            $table->string('Chemistry_mark');
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
        Schema::dropIfExists('Students_Subjects');
    }
}
