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
        Schema::create('debug_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('entry_type', 1)->default('S')->index('entry_type')->comment('radio(E=Error,S=Success)');
            $table->char('log_type', 4)->default('GEN')->comment('drop(GEN=General,EML=Email,OTH=Others)');
            $table->char('title');
            $table->text('log_data');
            $table->char('status', 1)->default('S')->comment('drop(F=Failed,S=Success)');
            $table->timestamp('entry_time')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debug_log');
    }
};
