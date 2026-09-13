<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_online_log', function (Blueprint $table) {
            $table->char('user_id', 10)->primary();
            $table->char('u_type', 1)->default('A');
            $table->timestamp('last_time')->useCurrent();

            $table->unique(['user_id', 'u_type'], 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_online_log');
    }
};
