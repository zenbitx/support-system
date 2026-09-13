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
        Schema::create('ticket_feedback', function (Blueprint $table) {
            $table->integer('ticket_id')->primary();
            $table->char('f_type', 1)->default('P')->comment('radio(P=Positive, N=Nagative)');
            $table->char('f_msg')->default('')->comment('textarea');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_feedback');
    }
};
