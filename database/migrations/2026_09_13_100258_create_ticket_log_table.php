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
        Schema::create('ticket_log', function (Blueprint $table) {
            $table->integer('ticket_id')->default(0)->index('ticket_id_2');
            $table->integer('log_id')->default(0);
            $table->char('log_by', 6)->default('');
            $table->char('log_by_type', 1)->default('A')->comment('radio(A=Staff,U=Ticket User,G=Guest Ticke User)');
            $table->char('log_msg', 150)->default('');
            $table->char('ticket_status', 1)->default('P')->comment('drop(N=New,C=Closed,P=In Progress,R=Re-Open,W=Waiting For User)');
            $table->timestamp('entry_time')->useCurrent();

            $table->unique(['ticket_id', 'log_id'], 'ticket_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_log');
    }
};
