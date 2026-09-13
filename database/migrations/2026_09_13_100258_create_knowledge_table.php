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
        Schema::create('knowledge', function (Blueprint $table) {
            $table->increments('id');
            $table->char('slug_id', 100)->default('')->index('slug_id');
            $table->unsignedInteger('cat_id')->default(0);
            $table->char('title', 200)->default('');
            $table->text('k_body')->nullable()->comment('textarea');
            $table->unsignedInteger('v_count')->default(0)->comment('View Count');
            $table->integer('l_count')->default(0)->comment('like count');
            $table->integer('d_count')->default(0)->comment('dislike count');
            $table->char('is_stickey', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('added_by', 2)->default('')->comment('FK(app_user,id,title)');
            $table->char('k_tag', 100);
            $table->char('k_soundex', 100)->default('');
            $table->timestamp('entry_time')->nullable();
            $table->char('featured_video_link')->default('');
            $table->timestamp('last_update_time')->useCurrent();
            $table->char('status', 1)->default('U')->comment('bool(P=Publish,U=Unpublish)');

            $table->index(['is_stickey', 'status'], 'is_stickey_status');
            $table->fullText(['title', 'k_body', 'k_tag', 'k_soundex'], 'src_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowledge');
    }
};
