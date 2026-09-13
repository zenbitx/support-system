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
        Schema::create('notice', function (Blueprint $table) {
            $table->increments('id');
            $table->char('title', 50)->default('');
            $table->text('msg')->nullable()->comment('textarea');
            $table->date('start_date');
            $table->date('end_date');
            $table->char('msg_for', 1)->default('B')->comment('radio(B=Both, S=Site,A=Admin Panel)');
            $table->char('added_by', 2)->default('');
            $table->timestamp('added_on')->useCurrentOnUpdate()->useCurrent();
            $table->char('status', 1)->default('A')->comment('bool(A=Active,I=Inactive)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notice');
    }
};
