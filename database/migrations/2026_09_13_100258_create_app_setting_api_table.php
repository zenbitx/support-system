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
        Schema::create('app_setting_api', function (Blueprint $table) {
            $table->char('s_api_name', 50)->default('')->index('s_api_name');
            $table->char('s_key', 50)->default('');
            $table->char('s_title', 100)->default('');
            $table->text('s_val');
            $table->char('s_type', 1)->default('T')->comment('drop(T=Textbox,A=Textarea,B=Boolean,D=Dropdown,R=Radio,Z=Timezone)');
            $table->char('s_option')->default('');
            $table->char('s_auto_load', 1)->default('Y')->comment('bool(Y=Yes,N=No)');

            $table->unique(['s_api_name', 's_key'], 'api_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_setting_api');
    }
};
