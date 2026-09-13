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
        Schema::create('history_misslogin', function (Blueprint $table) {
            $table->comment('locked_user');
            $table->char('user_id', 2)->default('')->index('user_id');
            $table->timestamp('hit_date')->useCurrent();
            $table->char('ip', 20)->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_misslogin');
    }
};
