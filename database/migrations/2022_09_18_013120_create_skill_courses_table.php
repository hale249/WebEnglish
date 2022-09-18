<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('skill_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->tinyInteger('is_active')->default(true)->nullable();
            $table->text('link_video');
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
        Schema::dropIfExists('skill_courses');
    }
}
