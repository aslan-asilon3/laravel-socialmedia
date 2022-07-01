<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GoogleIdColumn extends Migration
{

    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('google_id')->nullable();
        });
    }
    
    public function down()
    {
        //
    }
}
