<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessTable extends Migration
{
    public function up()
    {
        Schema::create('access', function (Blueprint $table) {
            $table->id();
            $table->string('access_description');
            $table->text('summary')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('access');
    }
}
