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
        Schema::create('app_setting', function (Blueprint $table) {
            $table->char('s_key', 30)->default('')->primary();
            $table->char('s_title', 100)->default('');
            $table->char('s_val')->default('');
            $table->char('s_type', 1)->default('T')->comment('drop(T=Textbox,A=Textarea,B=Boolean,D=Dropdown,R=Radio,Z=Timezone)');
            $table->char('s_option')->default('');
            $table->char('s_auto_load', 1)->default('N')->comment('bool(Y=Yes,N=No)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_setting');
    }
};
