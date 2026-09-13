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
        Schema::create('role_list', function (Blueprint $table) {
            $table->comment('app_permission,role');
            $table->char('pv_id', 4);
            $table->char('role_id', 2);
            $table->char('title', 50)->default('');
            $table->char('display_as', 50)->default('');
            $table->char('grade', 1)->default('3')->comment('0=supper power, 1>2>3>4....');

            $table->unique(['pv_id', 'role_id'], 'pv_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_list');
    }
};
