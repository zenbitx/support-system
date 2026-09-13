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
        Schema::create('iplist', function (Blueprint $table) {
            $table->char('ip', 50)->default('')->primary();
            $table->timestamp('added_on')->nullable();
            $table->timestamp('start_count_time')->useCurrent();
            $table->decimal('req_counter', 3, 0);
            $table->char('entry_type', 1)->default('A')->comment('radio(A=Auto, M=Manually');
            $table->char('country_code', 2)->default('');
            $table->char('status', 1)->default('N')->comment('radio(N=Normal,L=Locked,C=Captcha)');
            $table->decimal('h_at_count', 3, 0)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iplist');
    }
};
