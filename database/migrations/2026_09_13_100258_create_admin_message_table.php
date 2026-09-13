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
        Schema::create('admin_message', function (Blueprint $table) {
            $table->increments('id');
            $table->char('subject')->default('');
            $table->text('body');
            $table->char('to_user')->default('')->comment('FK(app_user,id,title)');
            $table->char('from_user', 3)->default('');
            $table->char('last_replied', 3);
            $table->timestamp('entry_time')->useCurrent();
            $table->char('status', 1)->default('N')->comment('radio(N=New,R=Read,D=Deleted)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_message');
    }
};
