<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applicant_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('date')->nullable();
            $table->string('name')->nullable();
            $table->string('subject')->nullable();
            $table->string('url')->nullable();
            $table->string('method')->nullable();
            $table->string('can_status')->nullable();
            $table->string('stage1')->nullable();
            $table->string('stage2')->nullable();
            $table->text('note')->nullable();
            $table->text('interviewers')->nullable();
            $table->timestamps();

            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_activities');
    }
}
