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
        Schema::create('custom_field', function (Blueprint $table) {
            $table->char('id', 2)->primary();
            $table->char('cat_id')->default('0');
            $table->char('title', 100)->default('');
            $table->char('help_text')->default('');
            $table->char('type', 1)->default('T')->comment('radio(T=Textbox,N=Numeric,D=Dropdown,A=Date,R=Radio)');
            $table->char('opt_json_base');
            $table->char('is_required', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('default_value')->default('');
            $table->char('is_api_based', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('is_private', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('is_on_grid', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('api_name', 50)->default('')->comment('like: EnvatoAPI');
            $table->char('on_submit_api_check', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('status', 1)->default('Y')->comment('bool(Y=Yes,N=No)');
            $table->unsignedInteger('fld_order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_field');
    }
};
