<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmailUs extends Migration
{
 public function up()
 {
    Schema::create('email_us', function (Blueprint $table) {
        $table->id();
        $table->string('email');
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
        Schema::dropIfExists('email_us');
    }
}
