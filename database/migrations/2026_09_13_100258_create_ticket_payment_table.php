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
        Schema::create('ticket_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ticket_id')->default(0);
            $table->unsignedInteger('reply_id')->default(0);
            $table->decimal('amount', 7)->unsigned()->default(0);
            $table->char('payment_currency', 3)->default('USD')->comment('USD,EUR,GBP');
            $table->string('payment_des')->default('');
            $table->char('payment_id', 14);
            $table->char('created_by', 3);
            $table->char('refund_msg')->default('');
            $table->char('payment_method', 1)->default('P')->comment('radio(P=PayPal,S=Stripe,A=Authorize)');
            $table->timestamp('create_date')->useCurrent();
            $table->timestamp('process_date')->nullable();
            $table->char('status', 1)->default('P')->comment('drop(P=Pending,A=Paid,F=Failed,R=Refunded)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_payment');
    }
};
