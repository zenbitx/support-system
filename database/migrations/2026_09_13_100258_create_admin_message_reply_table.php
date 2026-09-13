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
        Schema::create('admin_message_reply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('msg_id')->default(0)->index('msg_id');
            $table->text('reply_text');
            $table->char('replied_by', 3)->default('');
            $table->timestamp('entry_time')->useCurrent();
            $table->char('status', 1)->default('N')->comment('radio(N=New,R=Read,D=Deleted)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_message_reply');
    }
};
