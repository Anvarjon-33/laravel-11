<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_joined_rooms', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->uuid('room_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('room_id')->references('id')->on('user_rooms');
            $table->unique(['user_id', 'room_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_joined_rooms');
    }
};
