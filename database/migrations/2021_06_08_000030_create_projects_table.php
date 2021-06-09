<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->string('slug', 40);
            $table->string('body', 3000);
            $table->string('link', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
