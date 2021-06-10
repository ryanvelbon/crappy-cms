<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30)->unique();
            $table->string('slug', 40)->unique();
            $table->string('icon', 30)->unique();
            $table->string('description_short', 200);
            $table->text('description_long');
            $table->boolean('available')->default(1);
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
