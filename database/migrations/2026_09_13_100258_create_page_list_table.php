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
        Schema::create('page_list', function (Blueprint $table) {
            $table->char('res_id', 2)->primary();
            $table->char('title', 50)->default('');
            $table->char('controller_title', 150)->default('');
            $table->char('directory', 50)->default('');
            $table->char('controller', 50)->default('');
            $table->char('method', 40)->default('');
            $table->char('panel', 1)->default('A')->comment('DROP(A=Admin,C=Customer)');
            $table->char('status', 1)->default('A')->comment('A=Active, I=Inactive');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_list');
    }
};
