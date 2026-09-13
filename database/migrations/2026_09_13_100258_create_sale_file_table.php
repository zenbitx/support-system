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
        Schema::create('sale_file', function (Blueprint $table) {
            $table->increments('id');
            $table->char('key_rand', 8)->default('');
            $table->char('extn', 8)->default('');
            $table->char('file_name')->default('');
            $table->text('description')->nullable();
            $table->timestamp('update_date')->useCurrent();
            $table->char('is_paid', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->decimal('amount', 5)->unsigned()->default(0);
            $table->unsignedInteger('total_sold')->default(0);
            $table->unsignedInteger('hour_of_avaiable')->default(0);
            $table->char('has_expiry', 1)->nullable()->default('Y')->comment('bool(Y=Yes,N=No)');
            $table->timestamp('expiry_date')->nullable();
            $table->char('status', 1)->default('A')->comment('bool(A=Active,I=Inactive)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_file');
    }
};
