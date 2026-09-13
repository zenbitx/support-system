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
        Schema::create('canned_msg', function (Blueprint $table) {
            $table->increments('id');
            $table->char('user_id', 3)->default('');
            $table->char('title', 150)->default('');
            $table->text('canned_msg')->nullable()->comment('textarea');
            $table->timestamp('entry_date')->useCurrent();
            $table->char('added_by', 3)->default('');
            $table->char('canned_type', 1)->default('T')->comment('drop(T=Ticket,C=Chat)');
            $table->char('status')->default('A')->comment('bool(A=Active,I=Inactive)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canned_msg');
    }
};
