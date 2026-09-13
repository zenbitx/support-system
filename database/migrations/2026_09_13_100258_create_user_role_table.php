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
        Schema::create('user_role', function (Blueprint $table) {
            $table->char('pvid', 4);
            $table->char('role_id', 1);
            $table->char('title', 50)->default('');
            $table->char('status', 1)->default('A')->comment('A=Active, I=Inactive');

            $table->unique(['pvid', 'role_id'], 'pvid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_role');
    }
};
