<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TimeWork extends Migration
{
    public function up()
    {
        Schema::create('time_work', function (Blueprint $table) {
            $table->id();
            $table->string('time_work');
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
        Schema::dropIfExists('time_work');
    }
}
