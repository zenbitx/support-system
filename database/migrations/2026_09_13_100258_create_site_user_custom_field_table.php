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
        Schema::create('site_user_custom_field', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->default(0);
            $table->char('custom_id', 2)->default('');
            $table->char('fld_title', 100);
            $table->char('fld_type', 1)->default('T')->comment('radio(T=Textbox,N=Numeric,D=Dropdown,A=Date,R=Radio)');
            $table->char('fld_value', 100);
            $table->char('fld_value_text', 100);
            $table->char('is_api_based', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('api_name', 50);
            $table->text('api_data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_user_custom_field');
    }
};
