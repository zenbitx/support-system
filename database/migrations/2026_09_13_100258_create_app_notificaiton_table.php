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
        Schema::create('app_notificaiton', function (Blueprint $table) {
            $table->comment('notification');
            $table->increments('id');
            $table->char('user_id', 10)->index('user_type');
            $table->char('title', 100);
            $table->char('msg')->default('');
            $table->char('entry_type', 1)->default('N')->comment('radio(N=Notification,M=message)');
            $table->char('entry_link', 150)->default('');
            $table->decimal('n_counter', 2, 0)->unsigned()->default(1);
            $table->char('is_popup_link', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->timestamp('view_time')->nullable();
            $table->timestamp('entry_time')->useCurrent();
            $table->char('item_type', 2)->default('');
            $table->char('extra_param')->default('');
            $table->char('status', 1)->default('A')->comment('radio(A=Active,V=Viewed,D=Deleted)');

            $table->index(['user_id', 'item_type'], 'user_id_item');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_notificaiton');
    }
};
