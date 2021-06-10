<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30)->unique();
            $table->string('slug', 40)->unique();
            $table->string('body', 3000);
            $table->boolean('available')->default(1);
        });
    }

    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
