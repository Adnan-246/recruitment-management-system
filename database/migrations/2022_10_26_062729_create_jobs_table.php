<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id_no')->nullable()->unique();
            $table->string('ref_code')->nullable()->unique();
            $table->string('position_name')->nullable();
            $table->text('description')->nullable();
            $table->string('post_date')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->integer('vacancy')->nullable();
            $table->text('requirement')->nullable();
            $table->integer('salary')->nullable();
            $table->string('position_type')->nullable();
            $table->string('location')->nullable();
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->text('file')->nullable();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('cover_letter')->nullable();
            $table->integer('status')->nullable()->default(0);
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
        Schema::dropIfExists('jobs');
    }
}
