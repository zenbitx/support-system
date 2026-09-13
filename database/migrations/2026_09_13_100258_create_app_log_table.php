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
        Schema::create('app_log', function (Blueprint $table) {
            $table->char('user_id', 25)->default('')->index('pv_id');
            $table->char('user_type', 2);
            $table->char('user_role', 2)->default('C')->comment('E=User, A=Admin,C=Company');
            $table->string('changed_page', 150)->default('');
            $table->char('changed_type', 1)->default('U')->comment('U=Update, A=ADD, D=Delete,O=Others');
            $table->char('changed_value', 250)->default('');
            $table->char('msg_code', 4)->default('');
            $table->string('msg_param', 100)->default('');
            $table->char('ip', 50)->default('');
            $table->timestamp('date_time')->useCurrent();
            $table->char('tag', 10)->default('');
            $table->char('member_id', 4)->default('')->index('member_id');
            $table->char('agent_id', 4)->default('')->index('agent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_log');
    }
};
