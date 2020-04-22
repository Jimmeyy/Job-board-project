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
            $table->foreignId('employer_id');
            $table->foreignId('category_id');
            $table->string('position')->nullable();
            $table->string('location')->nullable();
            $table->integer('aplication_amount')->nullable();
            $table->enum('workload', ['full time', 'part time']);
            $table->string('description')->nullable();
            $table->float('salary_start')->nullable();
            $table->float('salary_end')->nullable();
            $table->integer('min_experience')->nullable();
            $table->text('required_skills')->nullable();
            $table->text('nice_to_have_skills')->nullable();
            $table->date('expires_at')->nullable();
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
