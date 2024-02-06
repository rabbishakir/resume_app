<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('residency')->nullable();
            $table->json('skills')->default(json_encode([]));
            $table->json('residency_location')->default(json_encode([]));
            $table->json('certifications')->default(json_encode([]));
            $table->date('dob')->nullable();
            $table->string('gender')->nullable()->comment('1 for male, 2 for female');
            $table->boolean('clearance')->nullable()->comment('1 for yes, 0 for no');
            $table->string('clearance_yes')->nullable();
            $table->boolean('criminal_record')->nullable()->comment('1 for yes, 0 for no');
            $table->string('criminal_record_yes')->nullable();
            $table->text('comment')->nullable();

            $table->string('undergraduate_institution')->nullable();
            $table->string('undergraduate_major')->nullable();
            $table->string('undergraduate_from_to')->nullable();
            $table->string('graduate_institution')->nullable();
            $table->string('graduate_major')->nullable();
            $table->string('graduate_from_to')->nullable();
            $table->string('phd_institution')->nullable();
            $table->string('phd_major')->nullable();
            $table->string('phd_from_to')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
