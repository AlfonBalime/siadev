<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary()->default(DB::raw('gen_random_uuid()')); // Session ID
            $table->uuid('user_id')->nullable(); // Optional user ID
            $table->text('payload'); // Session payload
            $table->integer('last_activity'); // Last activity timestamp
            $table->ipAddress('ip_address')->nullable(); // Optional IP address
            $table->string('user_agent')->nullable(); // Optional user agent
        });
    }

    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}

