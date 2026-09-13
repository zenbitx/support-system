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
        Schema::create('chat_denied', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('chat_id')->default(0)->index('chat_id');
            $table->char('app_user_id', 2)->default('');
            $table->timestamp('entry_time')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_denied');
    }
};
