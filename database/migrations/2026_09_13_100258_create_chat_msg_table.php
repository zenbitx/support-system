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
        Schema::create('chat_msg', function (Blueprint $table) {
            $table->unsignedInteger('chat_id')->index('chat_id');
            $table->char('msg_id', 4);
            $table->char('temp_id', 32);
            $table->char('reply_user_type', 1)->default('N')->comment('radio(S=System,U=User,A=Admin,N=No User)');
            $table->char('reply_user_id', 10);
            $table->text('msg');
            $table->char('form_id', 2)->default('');
            $table->timestamp('entry_time')->useCurrent();

            $table->unique(['chat_id', 'msg_id'], 'chat_id_msg_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_msg');
    }
};
