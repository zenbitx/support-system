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
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->char('title', 150)->default('');
            $table->unsignedInteger('parent_category')->default(0)->comment('FK(category,id,title)');
            $table->char('parent_category_path', 50);
            $table->char('show_on', 1)->default('B')->comment('radio(B=Both,K=Only Knowledge,T=Only on Ticket)');
            $table->char('status', 1)->default('A')->comment('bool(A=Active,I=Inactive)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
