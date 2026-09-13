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
        Schema::create('work_log', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ticket_id')->default(0);
            $table->char('user_id', 2)->default('');
            $table->char('note')->default('');
            $table->decimal('w_time', 4, 0)->unsigned()->default(0);
            $table->timestamp('entry_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_log');
    }
};
