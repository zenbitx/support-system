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
        Schema::create('ticket_assign_rule', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cat_ids')->default('');
            $table->char('rule_type', 1)->default('A')->comment('radio(A=Assign,N=Notifiy)');
            $table->char('rule_id', 2);
            $table->char('status', 1)->default('A')->comment('bool(A=Active,I=Inactive)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_assign_rule');
    }
};
