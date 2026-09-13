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
        Schema::create('sale_file_payment_log', function (Blueprint $table) {
            $table->char('payment_id', 14)->default('');
            $table->unsignedInteger('user_id')->default(0);
            $table->integer('file_id')->default(0)->index('merchant_id_customer_id');
            $table->decimal('amount_cr', 5)->default(0);
            $table->decimal('amount_dr', 5)->default(0);
            $table->char('first_2_digit', 2)->default('');
            $table->char('last_4_digit', 4)->default('');
            $table->char('transaction_id', 60)->default('');
            $table->dateTime('process_time');
            $table->char('transaction_time', 22)->default('');
            $table->dateTime('update_time');
            $table->char('result', 1)->default('');
            $table->char('result_msg', 150)->default('');
            $table->char('note', 150)->default('');
            $table->char('response_reason', 3)->default('');
            $table->char('status', 1)->default('');
            $table->char('transation_type', 1)->default('A')->comment('A=Auth Capture, O=Auth Only, C= Refund Credit, V= Refund Void');
            $table->char('paid_by', 2)->default('PP')->comment('radio(PP=Paypal, AU=Authorize,ST=Stripe)');
            $table->char('pp_payer_email', 150)->default('')->comment('Paypal payer email');
            $table->char('name_on_card', 80);
            $table->char('country', 2)->default('');
            $table->char('approval_code', 50)->default('')->comment('Sale Id for PayPal');
            $table->char('ref_transaction_id', 60)->default('')->comment('For refund Transaction');

            $table->index(['payment_id', 'transaction_id'], 'merchant_id_payment_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_file_payment_log');
    }
};
