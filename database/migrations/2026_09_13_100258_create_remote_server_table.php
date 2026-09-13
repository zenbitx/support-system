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
        Schema::create('remote_server', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name', 100)->default('');
            $table->char('private_key')->default('');
            $table->char('login_url')->default('')->comment('textarea');
            $table->char('valid_url')->default('')->comment('textarea');
            $table->char('button_text_color', 20)->default('');
            $table->char('button_color', 20)->default('');
            $table->char('button_txt', 100)->default('');
            $table->char('server_type', 1)->default('L')->comment('radio(L=Login Server,F=Field Validation)');
            $table->char('status', 1)->default('A')->comment('bool(A=Active,I=Inactive)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remote_server');
    }
};
