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
        Schema::create('admin_note', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ref_id')->default(0);
            $table->char('ref_type', 1)->default('T')->comment('radio(T=On TIcket, U=On Client)');
            $table->char('user_id', 2)->default('');
            $table->char('note')->default('');
            $table->timestamp('entry_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_note');
    }
};
