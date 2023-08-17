<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedByToPhoneInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phone_interviews', function (Blueprint $table) {
            $table->string("created_by")->nullable()->after('recommend_onsite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phone_interviews', function (Blueprint $table) {
            $table->dropColumn('created_by');
        });
    }
}
