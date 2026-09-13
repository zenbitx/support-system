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
        Schema::create('topbar_icon', function (Blueprint $table) {
            $table->increments('id');
            $table->char('title', 50)->default('');
            $table->char('sub_title', 150)->default('');
            $table->char('icon_class', 30)->default('');
            $table->unsignedInteger('icon_order')->default(0);
            $table->char('status', 1)->default('Y')->comment('bool(Y=Yes,N=No)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topbar_icon');
    }
};
