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
            $table->string('education_level');
            $table->string('new_existing');
            $table->string('grade')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('gender');
            $table->integer('age');
            $table->string('citizenship');
            $table->string('suffix_name')->nullable();
            $table->string('birthplace');
            $table->string('religion');
            $table->date('date_of_birth');
            $table->string('street_number');
            $table->string('street');
            $table->string('subdivision');
            $table->string('city');
            $table->string('province');
            $table->string('barangay');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('guardian_name')->nullable();
            $table->string('parent_email');
            $table->string('parent_phone');
            $table->string('parent_mobile');
            $table->string('father_occupation');
            $table->string('mother_occupation');
            $table->string('payment_method');
            $table->string('payment_mode');
            $table->enum('status', ['new', 'pending', 'approved', 'rejected'])->default('new'); // Enum definition
            $table->timestamps();
        });
    }    

    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
