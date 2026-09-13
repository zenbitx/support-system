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
        Schema::create('ticket_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id')->default(0)->index('ticket_id');
            $table->unsignedInteger('reply_id')->default(0);
            $table->char('meta_key', 100);
            $table->text('meta_val');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_meta');
    }
};
