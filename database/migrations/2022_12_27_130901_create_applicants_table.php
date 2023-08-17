<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('apply_date')->nullable();  
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->string('education')->nullable();
            $table->string('experience')->nullable();
            $table->text('experience_descrip')->nullable();
            $table->integer('salary_expect')->nullable();
            $table->text('resume')->nullable();
            $table->text('cover_letter')->nullable(); 
            $table->string('status')->nullable()->default('New');
            $table->string('stage1')->nullable();
            $table->string('stage2')->nullable();
            $table->longText("interviewers")->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
            
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
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
        Schema::dropIfExists('applicants');
    }
}
