<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_interviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applicant_id')->nullable();
            $table->string('interview_date')->nullable();
            $table->string('assertive_outgoing')->nullable();
            $table->string('achievement_oriented')->nullable();
            $table->string('enthusiasm')->nullable();
            $table->string('verbal_persuasive')->nullable();
            $table->string('ability_to_learn')->nullable();
            $table->string('ability_manage_stress')->nullable();
            $table->string('confidence')->nullable();
            $table->string('education_training')->nullable();
            $table->string('skill_experience')->nullable();
            $table->string('job_stability')->nullable();
            $table->string('reason_interest_field')->nullable();
            $table->string('commitment_position')->nullable();
            $table->string('realistic_job')->nullable();
            $table->string('level_interest_position')->nullable();
            $table->string('potential_grow')->nullable();
            $table->string('string_lasting_impression')->nullable();
            $table->string('overall_evaluation')->nullable();
            $table->text('candidate_concern_area')->nullable();
            $table->text('candidate_strength')->nullable();
            $table->text('additional_comment')->nullable();
            $table->string('recommend_onsite')->nullable();
            $table->timestamps();

            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phone_interviews');
    }
}
