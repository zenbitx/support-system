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
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->char('ticket_track_id', 18)->unique('ticket_track_id');
            $table->char('cat_id', 11)->default('0');
            $table->char('title', 150)->default('');
            $table->text('ticket_body')->comment('textarea');
            $table->char('ticket_user', 10)->default('0');
            $table->timestamp('opened_time')->useCurrent();
            $table->timestamp('re_open_time')->nullable();
            $table->char('re_open_by', 10)->default('');
            $table->char('re_open_by_type', 1)->default('')->comment('radio(A=Staff,U=Ticket User,G=Guest Ticke User)');
            $table->char('user_type', 1)->default('U')->comment('radio(G=Guest,U=User,A=Staff)');
            $table->char('status', 1)->default('N')->comment('drop(N=New,C=Closed,P=In Progress,R=Re-Open)');
            $table->char('assigned_on', 2)->default('')->comment('FK(app_user,id,title)');
            $table->timestamp('assigned_date')->nullable();
            $table->char('last_replied_by', 10)->default('')->comment('FK(app_user,id,title)');
            $table->char('last_replied_by_type', 1)->default('')->comment('radio(G=Guest,U=User,A=Staff)');
            $table->timestamp('last_reply_time')->nullable();
            $table->timestamp('last_c_reply')->nullable();
            $table->decimal('ticket_rating', 1, 0)->unsigned()->default(0);
            $table->char('priroty', 1)->default('L')->comment('drop(L=Low,M=Medium,H=High,U=Urgent)');
            $table->char('is_public', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('is_open_using_email', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->char('is_paid_ticket', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->unsignedInteger('reply_counter')->default(0);
            $table->char('is_user_seen_last_reply', 1)->default('N')->comment('bool(Y=Yes,N=No)');

            $table->fullText(['title', 'ticket_body'], 'articles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
