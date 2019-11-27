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
            $table->bigIncrements('id');
            $table->string('site');
            $table->string('job_url')->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->text('keyword')->nullable();
            $table->string('job_type')->nullable();
            $table->string('level')->nullable();
            $table->string('hours_per_week')->nullable();
            $table->string('length')->nullable();
            $table->integer('salary')->nullable();
            $table->string('country')->nullable();
            $table->text('skills')->nullable();
            $table->string('success_score')->nullable();
            $table->string('location')->nullable();
            $table->dateTime('post_time')->nullable();
            $table->integer('proposals')->nullable();
            $table->integer('total_spend')->nullable();
            $table->integer('total_posted')->nullable();
            $table->integer('hire_rate')->nullable();
            $table->decimal('avg_hourly')->nullable();
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
