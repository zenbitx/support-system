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
        Schema::create('faq_list', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cat_id')->comment('FK(faq_category,id,name)');
            $table->string('question')->default('');
            $table->string('ans')->default('');
            $table->timestamp('entry_date')->useCurrent();
            $table->unsignedInteger('ord')->default(0);
            $table->char('status', 1)->default('A')->comment('bool(A=Active,I=Inactive)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq_list');
    }
};
