<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('enrollmentType');
            $table->string('fullName');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('mobileNumber');
            $table->string('gender');
            $table->string('gradeApplyingFor');
            $table->string('fathersName');
            $table->string('mothersName');
            $table->string('guardianName')->nullable();
            $table->string('guardianContact')->nullable();
            $table->string('guardianEmail')->nullable();
            $table->string('address');
            $table->string('previousSchool');
            $table->string('lastGradeCompleted');
            $table->json('documents')->nullable();
            $table->string('submissionMethod');
            $table->timestamps(); // Optional, if you want to track created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
