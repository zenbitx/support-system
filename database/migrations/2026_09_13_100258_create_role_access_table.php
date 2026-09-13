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
        Schema::create('role_access', function (Blueprint $table) {
            $table->char('pvid', 4);
            $table->char('role_id', 2);
            $table->char('res_id', 8)->default('');
            $table->char('status', 1)->default('N')->comment('A=Allow, D=Deny');

            $table->unique(['pvid', 'role_id', 'res_id'], 'pvid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_access');
    }
};
