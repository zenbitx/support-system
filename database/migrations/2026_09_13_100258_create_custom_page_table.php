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
        Schema::create('custom_page', function (Blueprint $table) {
            $table->comment('page');
            $table->increments('id');
            $table->char('slag_title');
            $table->char('title')->default('');
            $table->longText('page_body')->nullable()->comment('textarea');
            $table->timestamp('added_on')->useCurrent();
            $table->char('status', 1)->default('A')->comment('bool(A=Active, I=Inactive)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_page');
    }
};
