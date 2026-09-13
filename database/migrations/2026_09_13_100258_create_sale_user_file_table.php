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
        Schema::create('sale_user_file', function (Blueprint $table) {
            $table->increments('id');
            $table->char('dl_key', 32);
            $table->char('payment_id', 14)->nullable();
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedInteger('file_id')->default(0);
            $table->char('rand_key', 8)->default('');
            $table->timestamp('valid_until')->nullable();
            $table->timestamp('entry_time')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_user_file');
    }
};
