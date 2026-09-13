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
        Schema::create('system_msg', function (Blueprint $table) {
            $table->increments('id');
            $table->char('tag', 10)->default('');
            $table->char('title', 100)->default('');
            $table->char('msg')->default('');
            $table->char('is_sup', 1)->default('N')->comment('bool(Y=Yes,N=No);');
            $table->timestamp('added_on')->useCurrent();
            $table->char('added_by', 100);
            $table->char('msg_type', 1)->default('S')->comment('radio(D=Danger,W=Warning,S=Success)');
            $table->char('status', 1)->default('A')->comment('radio(A=Active,D=Dissmised)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_msg');
    }
};
