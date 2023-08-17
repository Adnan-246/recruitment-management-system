<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnsiteInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onsite_interviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applicant_id')->nullable();
            $table->string('interview_date')->nullable();
            $table->string('body_lan_eye_contact')->nullable();
            $table->string('resume_presentation')->nullable();
            $table->string('presentation_prior_work')->nullable();
            $table->string('achievement_oriented')->nullable();
            $table->string('enthusiasm')->nullable();
            $table->string('verbal_persuasive')->nullable();
            $table->string('team_skill')->nullable();
            $table->string('education_training')->nullable();
            $table->string('skill_experience')->nullable();
            $table->string('commitment_position')->nullable();
            $table->string('level_interest_position')->nullable();
            $table->string('asked_good_question')->nullable();
            $table->string('potential_to_grow')->nullable();
            $table->string('overall_evaluation')->nullable();
            $table->text('candidate_concern_area')->nullable();
            $table->text('candidate_strength')->nullable();
            $table->text('additional_comment')->nullable();
            $table->string('recommend_to_hire')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('onsite_interviews');
    }
}
