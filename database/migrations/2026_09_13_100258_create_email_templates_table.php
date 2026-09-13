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
        Schema::create('email_templates', function (Blueprint $table) {
            $table->char('k_word', 3)->default('')->unique('email_keyword');
            $table->char('grp', 20)->default('');
            $table->char('title', 100)->default('');
            $table->char('status', 1)->default('A')->comment('bool(A=Active,I=Inactive)');
            $table->char('subject', 150)->default('');
            $table->text('content');

            $table->primary(['k_word']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_templates');
    }
};
