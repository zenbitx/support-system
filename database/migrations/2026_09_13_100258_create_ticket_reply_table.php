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
        Schema::create('ticket_reply', function (Blueprint $table) {
            $table->integer('ticket_id')->default(0)->index('ticket_id_2');
            $table->integer('reply_id')->default(0);
            $table->char('asigned_by', 2)->default('')->comment('Ticket current asigned by');
            $table->char('replied_by', 6)->default('')->comment('FK(app_user,id,name)');
            $table->char('replied_by_type', 1)->default('A')->comment('radio(A=Staff,U=Ticket User,G=Guest Ticke User)');
            $table->text('reply_text')->comment('textarea');
            $table->timestamp('reply_time')->useCurrent();
            $table->char('ticket_status', 1)->default('P')->comment('drop(N=New,C=Closed,P=In Progress,R=Re-Open)');
            $table->char('is_private', 1)->default('Y')->comment('boot(Y=Yes,N=No)');
            $table->unsignedInteger('payment_id')->default(0);
            $table->char('is_user_seen', 1)->default('N')->comment('bool(Y=Yes,N=No)');
            $table->timestamp('seen_time')->nullable();

            $table->unique(['ticket_id', 'reply_id'], 'ticket_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_reply');
    }
};
