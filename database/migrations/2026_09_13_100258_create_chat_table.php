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
        Schema::create('chat', function (Blueprint $table) {
            $table->increments('id');
            $table->char('open_user_id', 10);
            $table->char('is_remote_typing', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('is_user_typing', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('end_by_type', 1)->default('')->comment('radio(A=Staff,C=Client)');
            $table->char('end_by', 10)->default('');
            $table->char('current_admin_user', 2);
            $table->timestamp('start_time')->useCurrent();
            $table->timestamp('end_time')->nullable();
            $table->char('bw_name', 50)->default('')->comment('Browser Idea');
            $table->char('country', 50)->default('');
            $table->timestamp('last_msg_time')->nullable();
            $table->char('last_msg_by', 1)->default('')->comment('radio(A=Admin,U=User)');
            $table->char('last_page_list', 150)->default('');
            $table->char('ip', 20)->default('');
            $table->char('header_msg')->default('');
            $table->char('status', 1)->default('N')->comment('radio(N=Not Started, S=Started,E=End)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat');
    }
};
