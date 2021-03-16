<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_id');
            $table->unsignedInteger('project');
            $table->string('subject', 255);
            $table->text('description');
            $table->unsignedInteger('type');
            $table->unsignedInteger('assignee')->nullable();
            $table->unsignedInteger('status')->nullable();
            $table->unsignedInteger('category')->nullable();
            $table->unsignedInteger('priority')->nullable();
            $table->unsignedInteger('resolution')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('due_date')->nullable();
            $table->decimal('estimated_hours')->nullable();
            $table->decimal('actual_hours')->nullable();
            $table->text('attachment')->nullable();
            $table->unsignedInteger('registered_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
