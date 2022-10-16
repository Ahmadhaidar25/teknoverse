<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CallUs extends Migration
{
 public function up()
 {
    Schema::create('call_us', function (Blueprint $table) {
        $table->id();
        $table->string('no_telepon');
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
        Schema::dropIfExists('call_us');
    }
}
