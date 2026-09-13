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
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->default(0);
            $table->char('title', 100)->default('');
            $table->char('href_type', 1)->default('L')->comment('radio(L=Link, P=Page)');
            $table->char('href')->default('')->comment('textarea');
            $table->char('text_icon', 50)->default('');
            $table->unsignedInteger('view_counter')->default(0);
            $table->char('is_new_window', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('status', 1)->default('A')->comment('bool(A=Active,I=Inactive)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
